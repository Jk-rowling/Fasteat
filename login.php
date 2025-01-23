<?php
    session_start();
    include('./lib/connect.php');
    $obj=new connect();
?>
<?php
    $email=$_POST['email'];
    $password=$_POST['password'];
    // $uname=$_POST['uname'];
    $res=$obj->login($email,$password);
    $c=mysqli_num_rows($res);
    // if($c==0)
    // $n=$obj->register($email,$pwd,$uname);
    // else
    // $n=2;
    if($c==1){
        $arr=mysqli_fetch_array($res);
        $name=$arr['name'];
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        $n=1;
        header('Location:shop.php');
    }
    else{
    header('Location:signin.php?result='.$c);
    }
?>