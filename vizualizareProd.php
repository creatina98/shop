<?php require "include/vizualizareProdus.inc.php"; ?>
<?php require "include/test.inc.php"; ?>
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
      <link rel="stylesheet" type="text/css" href="css/styleoferte.css?v=<?php echo time(); ?>">

      <title>M&E | Oferte</title>
    <style>
        .custom-control-label::before{
            border: 3px solid #655AFF;}
    @font-face{
	src: url(./fonts/Poppins-Regular.ttf);
	font-family: poppins-regular;
    }


    .container.pt-5{
        font-family: poppins-regular;
    }
    
    .btn-outline-primary{
        color: black;
        border-color: #655AFF;
        font-size: 18px;
        width: 80px;
        padding: 3px;
    }
    .btn-outline-primary:hover{
        background: #655AFF;
        border-color: #655AFF;
    }
    .btn-outline-primary:focus{
        background: #655AFF;
        color: white;
        box-shadow: none;
    }

    .btn-primary{
        background: #655AFF;
        border-color: #655AFF;
        width: 280px;
        font-size: 24px;
    }
    .btn-primary:hover{
        background-color: #473FBB;
    }
    .btn-primary:focus{
        background-color: #473FBB;
        box-shadow: inset 0  0 #ddd;

    }
     .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        border-color: #473FBB;
        background-color:#473FBB ;
     }
      
    </style>
  </head>
  <?php
  require "navbar.php";
  ?>

  <div class="container pt-5">

          <div class="row">
              <?php
              foreach ($array as $item) {
              ?>
              <div class="col-lg-6 col-md-7 col-sm-7 col-xs-12 clearfix pt-5">
                  <img class="img-fluid" src="./upload/<?php echo $item["imagine"];?>">
              </div>
              <div class="col-lg-6 col-md-4 col-sm-5 col-xs-12 px-5 pt-5">
                  <h2 class="text-left font-weight-normal mb-4"><?php echo $item["denumire"];?></h2>
                  <h5 class="pb-2">Caracteristici</h5>
                  <div style="font-size: 16px;">
                      <p class="mb-1">Culoare: <?php echo $item["culoare"];?></p>
                      <p class="mb-1">Material: <?php echo $item["material"];?></p>
                      <p>Stil: <?php echo $item["stil"];?></p>
                  </div>
                  <h5 class="">Masura</h5>
                  <form novalidate="" action="include/cos.inc.php?id_prod=<?php echo $item["id_produse"];?>" method="post">
                     <div class="radiosection pb-3">
                      <div class="custom-control  ml-4 pt-2 custom-radio radio1">
                      <input type="radio" id="marime" name="marime" value="S" class="custom-control-input"checked>
                      <label class="custom-control-label " for="marime"> <- S</label>
                      </div>
                      <div class="custom-control  ml-4 pt-2 custom-radio radio1">
                      <input type="radio" id="marime1" name="marime" value="M" class="custom-control-input">
                      <label class="custom-control-label " for="marime1"> <- M</label>
                      </div>
                      <div class="custom-control  ml-4 pt-2 custom-radio radio1">
                      <input type="radio" id="marime2" name="marime" value="L" class="custom-control-input">
                      <label class="custom-control-label " for="marime2"> <- L</label>
                      </div>
                      <div class="custom-control  ml-4 pt-2 custom-radio radio1">
                      <input type="radio" id="marime3" name="marime" value="XL" class="custom-control-input">
                      <label class="custom-control-label " for="marime3"> <- XL</label>
                      </div>
                     </div>
                      <button class="btn btn-primary" type="submit" name="cos"><i class="fas fa-plus-circle pr-3" style="color: white"></i>ADAUGA</button>
                      <?php if (isset($_SESSION['message'])): ?>
                          <div class="alert alert-<?=$_SESSION['msg_type']?> w-25 position-absolute" style="right: 0; z-index: 200;">
                              <?php
                              echo $_SESSION['message'];
                              unset($_SESSION['message']);
                              ?>
                          </div>
                      <?php endif ?>
                  </form>
                  <h5 class="pt-5 pb-2">Pret</h5>
                  <h3 class="pb-2 font-weight-normal"><span style="color: #FF3547;"><strike><?php echo $item["pretIntreg"];?></strike></span> <?php echo $item["pret"];?> LEI</h3>
              </div>
                  <?php
              }
              ?>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php
  require "footer.php";
  ?>
