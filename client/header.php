

<?php
$isLoggedIn = isset($_SESSION['user']) && isset($_SESSION['user']['username']);?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./"><img src=".\public\newlogo.png"></a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <?php 
        if($isLoggedIn) { ?>
        <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php
          echo ucfirst($_SESSION['user']['username'])
          ?>)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="?ask=true">Ask a question</a>
        </li>
       <li class="nav-item">
          <a class="nav-link " href="?u-id=<?php echo $_SESSION['user']['user_id']?>" >My questions</a>
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
            <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
      </ul>
       
    </div>
    <form class="d-flex" action="">
        <input class="form-control me-2" name="search"type="search" placeholder="Search questions" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>