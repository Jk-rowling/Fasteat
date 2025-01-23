<!DOCTYPE html>
<html lang="en">
<head>
<style>
.carousel-item{
    min-height: 280px;
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fasteat</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">FastEAT</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    
                    
                </div>
               
                <div class="navbar-nav">
                    <a href="signup.php" class="nav-item nav-link">Sign Up</a>
                   
                </div>
            </div>
        </div>
    </nav>
    
    <form class="position-absolute top-50 w-50 start-50 translate-middle border border-2 p-2 rounded-3 border-primary" method="post" action="register.php">
        <h2 class="">Signup</h2>
    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputname" placeholder="name" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputmobile" class="col-sm-2 col-form-label">Mobile No.</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputemail" placeholder="mobile no." name="mobile">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Address" name="address">
        </div>
    </div>

    
    <div class="row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Register Now</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-10 offset-sm-2">
            <button><a href="signin.php">Sign in</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
        <?php
                $n=-1;
                if(isset($_GET['result']))
                $n=$_GET['result'];
                if($n==1)
                {
        ?>

        <!-- Success Alert -->
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Registert successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
        <?php
                }
            else if($n==0)
            {

                ?>
<!-- Error Alert -->
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Error!</strong> Problem in registration.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php
            }
            else if($n==2)
            {
        ?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Duplicate!</strong> Already Register!!!
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
        <?php
            }
        ?>



        </div>
    </div>


</form>
</div>
</body>
</html>