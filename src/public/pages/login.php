<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brick Manage | Login</title>
    <!-- Fav Icon  -->
    <link rel="icon" href="https://www.amarbrick.com/public/web/assets/images/icon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- External Css  -->
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>

    <main class="container">
    <?php
            if(isset($_GET['loginError'])){
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php
                    echo $_GET['loginError'];
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php

            }
            ?>
        <div class="login-wrapper">
            
            <div class="row align-items-center justify-content-between mt-2">
                <div class="col-md-6 text-center">
                    <img class="img-fluid" width="400px" src="../../assets/images/factory.svg" alt="">
                
                </div>
                <div class="col-md-6">
                    <form method="POST" action="../../server/auth.php">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input required name="username" type="text" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-login w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>