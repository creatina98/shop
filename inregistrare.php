<?php
require "include/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styleInregistrare.css">
    <title>M&E | Shop</title>
  </head>
  <body>
  <div class="backAlb">
    <div class="navbar">
      <span class="navbar-toggle" id="js-navbar-toggle">
              <i class="fas fa-bars"></i>
          </span>
          <a href="https://mande.world" class="logo">M&E</a>
          <ul class="main-nav " id="js-menu">
              <li id="acasa" class="da">
                  <a href="index.html" class="nav-links">Acasa</a>
              </li>
              <li id="produse" class="da">
                  <a href="produse.html" class="nav-links">Produse</a>
              </li>
              <li id="oferte" class="da">
                  <a href="oferte.html" class="nav-links">Oferte</a>
              </li>
              <li id="meniu" class="right nu"><input type="text" placeholder="     Cauta in magazin..."></li>
                <li class="nav-links"><a href="#" ><i class="fas fa-user button toggle-login"></i></a></li>
                <div class="login">
                  <div class="triangle"></div><!-- .triangle -->
                  <form>
                    <div class="field-title">Nume:</div><!-- .field-title -->
                    <input type="email" placeholder="Nume de utilizator" />
                    <div class="field-title">Parola:</div><!-- .field-title -->
                    <input type="password" placeholder="**********" />
                    <input type="submit" value="Login" />
                    <a href="inregistrare.html"><input type="button" value="Register" /></a>
                  </form>
                </div>
              <li  class="nav-links"><a href="cosCumparaturi.html"><i class="fas fa-shopping-basket"></i></a></li>
          </ul>
        </div>
</div>
  	<div class="container mt-5">
  	<div class="row justify-content-center pb-5"> 
    <div class="col-md-6 order-md-1">
      <h1 class="mb-3 text-center">Inregistrează-te</h1>
      <form class="needs-validation" novalidate="">
      	<div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nume:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Popescu" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Prenume:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Ion" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Nume de utilizator:</label>
            <input type="text" class="form-control" id="firstName" placeholder="popescu123" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Email:</label>
          <input type="text" class="form-control" id="address" placeholder="you@example.com" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Parola:</label>
          <input type="text" class="form-control" id="address" placeholder="123456" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Confirmati prola:</label>
          <input type="text" class="form-control" id="address2" placeholder="123456">
        </div>


        <hr class="mb-4">
        <button class="btn btn-lg btn-block" type="submit">Inregistrare</button>
      </form>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js files/login.js"></script>
    <script src="./js files/wrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>