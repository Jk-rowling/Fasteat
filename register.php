<?php
    include('./lib/connect.php');
    $obj=new connect();
?>
<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $c=$obj->checkDuplicateUser($email);
    $n=0;
    if($c==0)
    $n=$obj->register($name,$email,$mobile,$password);
    else
    $n=2;
    header('Location:signup.php?result='.$n);
?>