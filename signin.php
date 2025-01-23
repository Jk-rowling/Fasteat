<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FastEAT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form class="position-absolute top-50 w-50 start-50 translate-middle border border-2 p-2 rounded-3 border-primary" method="post" action="login.php">
        <h2 class="">Signin</h2>
    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
        </div>
    </div>

    <!-- <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Uname" name="uname">
        </div>
    </div> -->

    
    <div class="row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">login</button>
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
    <strong>Success!</strong> login successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
        <?php
                }
            else if($n==0)
            {

                ?>
<!-- Error Alert -->
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Error!</strong> INVALID CREDENTIALS.
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