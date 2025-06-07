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
    elseif(isset($_GET['ask'])) {
       include('./client/ask.php');
    }
    elseif(isset($_GET['q-id'])) {
        $qid=$_GET['q-id'];
       include('./client/question-details.php');
    }
    else {
        include('./client/questions.php');
    }
?>
</body>
</html>