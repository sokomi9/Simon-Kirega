<!DOCTYPE html>
<html lang="en">
<head>
    <title>navbar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="d-flex flex-column">
            <span class="nav-text text-danger h3">Simon Kirega</span>
            <span class="nav-text text-white ps-3">Water Engineer</span>
            </div>
            <!--collapsible navigation bar-->
            <div class="d-flex justify-content-end">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo 'home.php'; ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown dropstart">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="water_management.php" class="dropdown-item">Water Management Services</a></li>
                            <li><a href="#" class="dropdown-item">General Plumbing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Contact Me</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
</body>
</html>