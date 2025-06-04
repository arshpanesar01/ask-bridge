<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include('./client/commonFiles.php');
?>
   
    <title>Ask Bridge</title>
</head>
<body>
    <?php 

    include('./client/header.php');
    if(isset($_GET['signup'])){
    include('./client/signup.php');
    }
    elseif(isset($_GET['login'])){
    include('./client/login.php');
    }
    else{
        //
    }
?>
</body>
</html>