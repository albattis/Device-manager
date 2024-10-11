<?php
/** @var string $content */
/** @var mixed $controller */

use helper\Alert;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $controller->getTitle()?></title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/insertcomputer.css">
  
<style>
    @media only screen and (max-width: 800px) {
    h1 {
    font-size: 20px;
    }
    }
</style>
<style>
    @font-face {
    font-family: 'Roboto Regular';
    font-style: normal;
    font-weight: normal;
    src: url('src/app/view/font/Roboto-Regular.woff') format('woff');
    
    }
</style>
<style type="text/css">
     body{
        font-family: 'Roboto Regular';
       
    }
</style>
</head>
<body>
<?php include("title.php") ?>
<?php

include("./src/app/view/template/menu.php");

?>

<?php Alert::display('success');?>
<?php Alert::display('warning');?>
<?php Alert::display('danger');?>

<?= $content ;?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/form.js"></script>

</body>
</html>