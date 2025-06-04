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
  session_start();
    include('./client/header.php');
    if(isset($_GET['signup']) && !$isLoggedIn){
    include('./client/signup.php');
    }
    elseif(isset($_GET['login'])&& !$isLoggedIn){
    include('./client/login.php');
    }
    else{
        //
    }
?>
</body>
</html>