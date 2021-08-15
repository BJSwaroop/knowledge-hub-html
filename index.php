<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Knowledge Hub</title>
  </head>
  <link rel="stylesheet" href="style.css">

  <body>
  <nav>
  <?php require 'navbar.html' ?>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1400x300/?laptops" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Welcome to Knowledge Hub</h2>
              <p></p>
              <button class="btn btn-danger">Technology</button>
              <button class="btn btn-primary">Web Development</button>
              <button class="btn btn-success">Roadmaps</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x300/?super computers" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2></h2>
              <p></p>
              <button class="btn btn-danger">Technology</button>
              <button class="btn btn-primary">Ethical Hacking</button>
              <button class="btn btn-success">Roadmaps</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x300/?Html" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2></h2>
              <p></p>
              <button class="btn btn-danger">Technology</button>
              <button class="btn btn-primary">Python</button>
              <button class="btn btn-success">Roadmaps</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<div class="container my-4">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">UI/ UX Design  </strong>
          <h3 class="mb-0">Web Development</h3>
          <div class="mb-1 text-muted my-1">Building and Maintenance of websites</div>
          <p class="card-text mb-auto">
            A front-end dev takes care of layout, design and interactivity using HTML, CSS and JavaScript. They take an idea from the drawing board and turn it into reality....
          </p>
          <button type="button"class="btn btn-dark my-1 btn-apna"><a href="webdevp2.php" style="text-decoration: none; color: white;"  >Get Started</a></button>

        </div>
        <div class="col-auto d-none d-lg-block img-apna">
          <img class="bd-placeholder-img" width="200" height="250" src="1.jpg.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">Programming</strong>
          <h3 class="mb-0">C</h3>
          <div class="mb-1 text-muted my-1">Learn C language</div>
          <p class="mb-auto">
            C is a powerful general-purpose programming language. It can be used to develop software like operating systems, databases, compilers, and so on. C programming is an excellent language.
          </p>
          <button type="button"class="btn btn-dark my-1 btn-apna"><a  href="cp2.php" style="text-decoration: none; color: white;"  >Get Started</a></button>

        </div>
        <div class="col-auto d-none d-lg-block">
         <img class="bd-placeholder-img" width="200" height="250" src="2.jpg.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container my-4">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Coding</strong>
          <h3 class="mb-0">DSA</h3>
          <div class="mb-1 text-muted my-1">Learn DSA</div>
          <p class="card-text mb-auto">
            A computer program is a collection of instructions to perform a specific task. For this, a computer program may need to store data, retrieve data, and perform computations on the data.
          </p>
          <button type="button"class="btn btn-dark my-1 btn-apna"><a  href="dsap2.php" style="text-decoration: none; color: white;"  >Get Started</a></button>

        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" src="3.jpg.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-warning">Python</strong>
          <h3 class="mb-0">Learn Python</h3>
          <div class="mb-1 text-muted my-1">Python (programming language)</div>
          <p class="mb-auto">
            Python is an interpreted high-level general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation.
          </p>
          <button type="button"class="btn btn-dark my-1 btn-apna"><a  href="pythonp2.php" style="text-decoration: none; color: white;"  >Get Started</a></button>

        </div>
        <div class="col-auto d-none d-lg-block">
         <img class="bd-placeholder-img" width="200" height="250" src="4.jpg.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

    <footer class="container-fluid">
      <p class="float-end"><a class="btm-link" href="#">Back to top</a></p>
  <p> · <a class="btm-link" href="#">Privacy</a> · <a href="#" class="btm-link">Terms</a></p>
      <div class="foot1">
        <p>Designed, Developed and Mantained by Knowledge Hub</p>
      </div>
      <div class="foot1">
        <p><p>Copyright &copy;2021 | All Rights Reserved Knowledge Hub</p></p>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
