

<?php
$isLoggedIn = isset($_SESSION['user']) && isset($_SESSION['user']['username']);?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=".\public\newlogo.png"></a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <?php 
        if($isLoggedIn) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Logout</a>
        </li>
        <?php }
       ?>
       <?php 
        if(!$isLoggedIn) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>
        <?php }
       ?>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Latest Question</a>
        </li>
      </ul>
    </div>
  </div>
</nav>