<?php

// session_start();
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
 }
 else
  $loggedin= false;

echo'<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
    <div class="container">
      <a href="../index.php" class="navbar-brand text-warning font-weight-bold">MER CLASSES</a>
      <a href="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="collapsenavbar">

         <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="../index.php" class="nav-link text-white">Home</a>
          </li>
          <li class="nav-item">
            <a href="../courses.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Courses</a>
          </li>
          <li class="nav-item">
            <a href="#.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Results</a>
          </li>
          <li class="nav-item">
            <a href="../faculty.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Faculty</a>
          </li>
          <li class="nav-item">
            <a href="../gallery.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Gallery</a>
          </li>
          <li class="nav-item">
            <a href="../about.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;About Us</a>
          </li>
          <li class="nav-item">
            <a href="../contact.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link text-white">&nbsp;&nbsp;&nbsp;Ebooks</a>
          </li>
        </ul>


      
      </div>
    </a>
  </div>
</nav>

 
    
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>';
    ?>