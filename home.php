<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include ("navbar.php"); ?>
    <div class="container-fluid">
        <div class="mt-3">
        <div class="d-flex pt-0 pb-3 justify-content-end">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg></span>
            <span>+254707070835</span>
        </div>
            <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/Simo.jpg" alt="Simo" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Reliable</h3>
      <p>I am happy to be depended on!</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/Simo2.jpg" alt="Chicago" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Time-Bound</h3>
      <p>Delivering projects on time!</p>
    </div> 
  </div>
  <div class="carousel-item">
    <img src="images/Simo3.jpg" alt="Simo3" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3>Customer-centric</h3>
      <p>Understanding needs of clients is priority!</p>
    </div>  
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
</div>
     
        </div>
     </div>   
</div>
<div class="container mt-3">
<h3 class="text-center mt-3 pt-5 pb-5">I specilize in the following</h3>
<div class="row justify-content-around">
        <div class="col-sm-3 p-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="images/Simo2.jpg" alt="Simo2" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Water Engineering</h4>
                    <a class="btn btn-danger" href="water_management.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="images/Simo3.jpg" alt="Simo3" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">General Plumbing</h4>
                    <a class="btn btn-danger" href="general_plumbing.php">View</a>
                </div>
            </div>
        </div>
        
</div>
<br>
<br>
<br>
<hr>
<div class="container mt-3">
    <div class="row">
        <blockquote class="d-sm-flex align-content-center">
        <span>
        <p class="display-6">“You can design and create, and build the most wonderful
            place in the world. But it takes people to make the dream a reality.”
            <footer class="blockquote-footer">Walt Disney</footer>
        </p>
        </span>
        <span><img class="float-end" src="images/Simo4.jpg" alt="Simo4"></span>
       </blockquote>
    </div>
<hr>
</div>
<div class="container-fluid p-3 bg-dark">
  <p class="text-white pt-2 "> © <?php echo date("Y");?> Simon Kirega</p>
</div>
</body>
</html>