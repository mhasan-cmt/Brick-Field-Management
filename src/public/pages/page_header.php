<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brick Manage | Home</title>

    <!-- Fav Icon  -->
    <link rel="icon" href="https://www.amarbrick.com/public/web/assets/images/icon.png" type="image/x-icon">

    <!-- External CSS Linkup -->
    <link rel="stylesheet" href="../../assets/css/styles.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <script defer src="../../../node_modules/@fortawesome/fontawesome-free/js/brands.min.js"></script>
    <script defer src="../../../node_modules/@fortawesome/fontawesome-free/js/solid.min.js"></script>
    <script defer src="../../../node_modules/@fortawesome/fontawesome-free/js/fontawesome.min.js"></script>
</head>
<body>

<!-- NavBar  -->

<nav class="navbar navbar-expand-lg navbar-dark bg-my fixed-top">
          <div class="container-fluid">


            <!-- Offcanvas trigger -->
            <a id="offcanvas-trigger" class="me-2 btn btn-outline-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <i class="fas fa-bars"></i>
            </a>
            <!-- Offcanvas trigger ends -->


          <a class="navbar-brand me-auto" href="#" onclick="redirectTo('.././index.php')">
            <h2 class="text-dark">Brick Manage</h2>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <form class="d-flex ms-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="খুঁজুন" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">
                      <i class="fas fa-search"></i> 
                    </button>
                  </div>
              </form>
              <div class="btn-group">
                <button type="button" class="btn text-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <i class="fas fa-user"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                  <li><button class="dropdown-item" type="button">Mahmudul Hasan Shafin</button></li>
                  <li><button class="dropdown-item" type="button">Admin</button></li>
                  <li><button class="dropdown-item" type="button" onclick="redirectTo('./login.php')"><i class="fas fa-sign-out-alt"></i> Logout</button></li>
                </ul>
              </div>
            </div>
          </div>
    </nav>
    
    <!-- NavBar Ends  -->

    <!-- OffCanvas  -->
    
    <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-body p-0 scrollbar style-7">
        <nav class="navbar side-bar-nav force-overflow">
          <ul class="navbar-nav">
            <li>
              <a class="text-dark nav-link px-3 active" href="#">
                <span class="me-2">
                  <i class="fas fa-home"></i>
                </span>
                <span>ড্যাশবোর্ড</span>
              </a>
            </li>
            <li>
              <a class="text-dark nav-link px-3 d-flex justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span>
                  <i class="fab fa-forumbee me-2"></i>
                  কাঁচামাল ক্রয়</span>
                <span class="ms-5">
                  <i class="fas fa-plus"></i>
                </span>
              </a>
              <div class="collapse" id="collapseExample">
                <div class="card card-body" style="transform: none;">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </li>
            <li>
              <a class="text-dark nav-link px-3 d-flex justify-content-between" data-bs-toggle="collapse" href="#collapse-2" role="button">
                <span>
                  <i class="fas fa-users me-2"></i>                  
                  শ্রমিক</span>
                <span>
                  <i class="fas fa-plus"></i>
                </span>
              </a>
              <div class="collapse" id="collapse-2">
                <div class="card card-body" style="transform: none;">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </li>
            <li>
              <a class="text-dark nav-link px-3" href="#">
                <span class="me-2">
                  <i class="fas fa-cog"></i>
                </span>
                <span>লোডিং</span>
              </a>
            </li>

            <li>
              <a class="text-dark nav-link px-3" href="#">
                <span class="me-2">
                  <i class="fas fa-cog"></i>
                </span>
                <span>আন-লোডিং</span>
              </a>
            </li>
            
            <li>
              <a class="text-dark nav-link px-3" href="#">
                <span class="me-2">
                  <i class="fas fa-cog"></i>
                </span>
                <span>বিক্রয়</span>
              </a>
            </li>

            <li>
              <a class="text-dark nav-link px-3 d-flex justify-content-between" data-bs-toggle="collapse" href="#customer" role="button">
                <span>
                  <i class="fas fa-users me-2"></i>                  
                  কাস্টমার</span>
                <span>
                  <i class="fas fa-plus"></i>
                </span>
              </a>
              <div class="collapse" id="customer">
                <div class="card card-body" style="transform: none;">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </li>

            <li>
              <a class="text-dark nav-link px-3" href="#">
                <span class="me-2">
                  <img width="35px" height="auto" src="../../assets/icons/truck.svg" alt="">
                </span>
                <span>ডেলিভারি</span>
              </a>
            </li>

            <li>
              <a class="text-dark nav-link px-3 d-flex justify-content-between" data-bs-toggle="collapse" href="#accounts" role="button">
                <span>
                  <i class="fas fa-users me-2"></i>                  
                  অ্যাকাউন্টস</span>
                <span>
                  <i class="fas fa-plus"></i>
                </span>
              </a>
              <div class="collapse" id="accounts">
                <div class="card card-body" style="transform: none;">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </li>

            <li>
              <a class="text-dark nav-link px-3 d-flex justify-content-between" data-bs-toggle="collapse" href="#report" role="button">
                <span>
                  <i class="fas fa-users me-2"></i>                  
                  রিপোর্ট</span>
                <span>
                  <i class="fas fa-plus"></i>
                </span>
              </a>
              <div class="collapse" id="report">
                <div class="card card-body" style="transform: none;">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
            </li>
            <li>
              <a class="text-dark nav-link px-3" href="#">
                <span class="me-2">
                  <i class="fas fa-cog"></i>
                </span>
                <span>সেটিংস</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    
    <!-- OffCanvas Ends -->