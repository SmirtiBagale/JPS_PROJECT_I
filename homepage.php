<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hamro Job - Home</title>
  <!-- Bootstrap CSS -->
  <link
    href="bootstrap-5.3.3-dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
 
  <style>
    .navbar {
    background-color: #fff;
    height: 80px;
    margin: 20px;
    border-radius: 16px;
    padding: 0.3rem;
}

.navbar-brand {
    font-weight: 500;
    color: #009970;
    font-size: 24px;
    transition: 0.3s color;
}

.jobseeker-button,
.employer-button,
.admin-button {
    background-color: #009970;
    color: #fff;
    font-size: 14px;
    padding: 8px 20px;
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s background-color;
}

.jobseeker-button:hover,
.employer-button:hover,
.admin-button:hover {
    background-color: #00b383;
}

.navbar-toggler {
    border: none;
    font-size: 1.2rem;
}

.navbar-toggler:focus, .btn-close:focus {
    box-shadow: none;
    outline: none;
}

.nav-link {
    color: #666777;
    font-weight: 500;
    position: relative;
}

.nav-link:hover, .nav-link.active {
    color: #000;
}

.nav-link::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background-color: #009970;
    visibility: hidden;
    transition: 0.3s ease-in-out;
}

.nav-link:hover::before, .nav-link:active::before {
    width: 100%;
    visibility: visible;
}

.hero-section {
    background: url('../img/home.jpg') no-repeat center center;
    background-size: cover;
    width: 100%;
    height: 100vh;
    position: relative;
}

.hero-section::before {
    background-color: rgba(0, 0, 0, 0.6);
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.hero-section .container {
    height: 100vh;
    z-index: 1;
    position: relative;
}


    </style>
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg fixed-top bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">Hamro Job</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Contact</a>
          </li>
        </ul>

        <div class="dropdown me-2">
          <button
            class="btn jobseeker-button dropdown-toggle"
            type="button"
            id="jobseekerDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            JobSeeker
          </button>
          <ul class="dropdown-menu" aria-labelledby="jobseekerDropdown">
            <li><a class="dropdown-item" href="./jobseeker/login.php">Login</a></li>
            <li><a class="dropdown-item" href="./jobseeker/register.php">Register</a></li>
          </ul>
        </div>

        <div class="dropdown me-2">
          <button
            class="btn employer-button dropdown-toggle"
            type="button"
            id="employerDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Employer
          </button>
          <ul class="dropdown-menu" aria-labelledby="employerDropdown">
            <li><a class="dropdown-item" href="./employer/login.php">Login</a></li>
            <li><a class="dropdown-item" href="./employer/register.php">Register</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button
            class="btn employer-button dropdown-toggle"
            type="button"
            id="adminDropdown"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Admin
          </button>
          <ul class="dropdown-menu" aria-labelledby="adminDropdown">
            <li><a class="dropdown-item" href="./admin/login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--navbar end-->

  <!--Hero section-->
  <section class="hero-section">
    <div class="container justify-content-center fs-1 text-white flex-column">
      <!-- Hero content can go here -->
    </div>
  </section>

  <!--End Hero section-->

  <!-- Bootsrap JS-->
  <script
    src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
