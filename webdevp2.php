<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Project 1</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/webdev.css">
  <body>
      
      <?php require 'navbar.html' ?>
      </nav>
   
      <div class="container">
        <div class="panel active" style="background-image: url('images/frontend.jpeg')">
          <h1>Frontend</h1>
          <a href="resources.html"><h3>Click Here</h3></a>
        </div>
        <div class="panel " style="background-image: url('images/backend.jpeg')">
          <h1>Backend</h1>
          <a href="#"><h3>Click Here</h3></a>

        </div>
        <div class="panel " style="background-image: url('images/fullstack.jpeg')">
          <h1>Fullstack</h1>
          <a href="#"><h3>Click Here</h3></a>

        </div>
        <div class="panel " style="background-image: url('images/htmlimg.jpeg')">
          <h1>OPEN COMMUNITIES</h1>
          <a href="#"><h3>Click Here</h3></a>

        </div>

      </div>

    <script src="js/webdevp2.js" charset="utf-8"></script>
  </body>
</html>
