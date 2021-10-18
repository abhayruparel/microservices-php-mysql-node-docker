<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: signin.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>home page</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="navbar.css" rel="stylesheet">
</head>

<body>

  <main>



    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Eleventh navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TeaStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="image.html">Image</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="persistence.html">Persistance</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="recommend.html">Persistance</a>
              </li>
            </ul>
          </div>
          <div class="justify-content-end">
            <div class="col-4">
              <a href="signin.php" class="btn btn-outline-dark">Login</a>
            </div>
          </div>
        </div>
      </nav>



      <div>
        <div class="bg-light p-5 rounded">
          <div class="col-sm-8 mx-auto">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img3.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p>Tea is an aromatic beverage prepared by pouring hot or boiling water over cured or fresh leaves of Camellia sinensis, an evergreen shrub native to 
              China and East Asia.[3] After water, it is the most widely consumed drink in the world.[4] There are many different types of tea; some, like Chinese greens and
               Darjeeling, have a cooling, slightly bitter, and astringent flavour,[5] while others have vastly different profiles that include sweet, nutty, floral, or grassy notes.
                Tea has a stimulating effect in humans primarily due to its caffeine content.[6]</p>
            <p>The tea plant originated in the region encompassing today's Southwest China, Tibet, north Myanmar and Northeast India, where it was used as a medicinal drink by various ethnic groups.[7][8] An early credible record of tea drinking dates to the 3rd century AD, in a medical text written by Hua Tuo.[9] It was popularised as a recreational drink during the Chinese Tang dynasty, and tea drinking spread to other East Asian countries. Portuguese priests and merchants introduced it to Europe during the 16th century.[10] During the 17th century, drinking tea became fashionable among the English, who started to plant tea on a large scale in India.</p>
          </div>
        </div>
      </div>
    </div>
  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>