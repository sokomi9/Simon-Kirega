<?php include('includes/header.php') ?>

<nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="d-flex flex-column">
        <span class="nav-text text-danger h3">Simon Kirega</span>
        <span class="nav-text text-white ps-3">Water Engineer</span>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo 'home.php'; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Projects</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           My Services
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item" style="color:white;" href="#">Water Management Services</a></li>
            <li><a class="dropdown-item" style="color:white;" href="#">General Plumbing</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>