<?php
    include('connect2.php');
    include('header.php');
    
    $dish='';
    $price='';
    $tprice='';
    if(isset($_SESSION['dish']))
{
    $dishname=$_SESSION['dish'];
}
if(isset($_SESSION['price']))
{
    $price=$_SESSION['price'];
}
?>

<?php


        $quant=$_POST['quant'];
        $dish=$_POST['dish'];
        $price=$_POST['price'];
        $tprice=$price*$quant;
   
    $sql="insert into order_detail(dishname,username,uemail,quantity,price)values('$dish','$name','$email','$quant','$tprice')";
    $n=mysqli_query($con,$sql);
    //echo $n;
    //header('location:index.php');
?>