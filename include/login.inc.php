<?php

if (isset($_POST['login'])) {
    require "dbh.inc.php";

    $mailuid = $_POST['username'];
    $password = $_POST['password'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM utilizatori WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['parola']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['idUtilizator'] = $row['id_utilizator'];
                    $_SESSION['idUsername'] = $row['username'];
                    $_SESSION['nume'] = $row['nume'];
                    $_SESSION['prenume'] = $row['prenume'];
                    $_SESSION['email'] = $row['email'];

                    $_SESSION['message'] = "Bine ai venit ".$_SESSION['nume']." ".$_SESSION['prenume'];
                    $_SESSION['msg_type'] = "success";

                    header("Location: ../produse.php?login=success");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}