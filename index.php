

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Blog Practice Site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
  <div class="container">
    <div class="header-top">
      <div class="row">
        <div class="col-md-2"> 
          <a href="#"><img class="img-responsive" src="asset/img/logo.png"></a>
        </div>
        <div class="col-md-6 col-md-offset-4"> 
          <a href="#"><img class="img-responsive" src="asset/img/banner.png"></a>
        </div>
      </div>
      
    </div>
   

  </div>

</header>


<?php include "public_pages/header.php"?>

<section class="main-content">
  <div class="container">
    <div class="row">
 <?php include "public_pages/content.php";?>
 <?php include "public_pages/sidebar.php";?>
  </div>
  </div>
  
</section>


<?php include "public_pages/footer.php";?>


</body>
</html>
