<?php 
require './class/adminclass.php';

$own= new adminclass();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>

<?php include "header.php";?>

<?php include "sidebar.php"; ?>

<?php 

if (isset($page)) {
    if ($page=="addpost") {
        include "pages/addpost.php";
    }
    elseif ($page=="view") {
      include "pages/view.php";
    }
}
else {
  include "pages/home.php";
}

?>



</body>
</html>