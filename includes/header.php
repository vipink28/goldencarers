<?php
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
$servername = $_SERVER['SERVER_NAME'];
$root = $protocol . $servername . '/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Carers</title>

  <!--fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
    integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?=$root?>redesign/assets/css/dist/style.css">
  <?php include('includes/svg-sprites/icons.php'); ?>
</head>

<body>  
  <nav class="navbar navbar-expand-lg navbar-light bg-light py-3" aria-label="primary navigation">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">GoldenCarers</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation"
        aria-controls="primaryNavigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="primaryNavigation">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link fw-bold rounded-3 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold rounded-3" href="#">Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold rounded-3" href="#">Calendar</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold rounded-3" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">DIY</a>
            <ul class="dropdown-menu bg-light">
              <li><a class="dropdown-item fw-bold" href="#">DIY Activity</a></li>
              <li><a class="dropdown-item fw-bold" href="#">Submit Activity</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold rounded-3" href="#">Forum</a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <form role="search">
              <input class="form-control rounded-pill fw-bold" type="search" placeholder="Search Activities"
                aria-label="Search">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold rounded-3 avatar-dropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false"><span
                class="rounded-circle border d-inline-flex align-items-center justify-content-center border-2 avatar flex-shrink-0">J</span></a>
            <ul class="dropdown-menu dropdown-menu-end bg-light text-lg-end">
              <li><a class="dropdown-item fw-bold" href="#">Josephine</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item fw-bold" href="#">History</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item fw-bold" href="#">Create DIY Activity</a></li>
              <li><a class="dropdown-item fw-bold" href="#">Submit Activity</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item fw-bold" href="#">My Profile</a></li>
              <li><a class="dropdown-item fw-bold" href="#">Account Settings</a></li>
              <li><a class="dropdown-item fw-bold" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>