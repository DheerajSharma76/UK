<?php
session_start();

$con=new mysqli("localhost","root","","uk");
$q="select * from login where username='".$_POST['username']."' and password='".$_POST['password']."'";
$r=$con->query($q);
if($r->num_rows>0)
{
    // header("location:index.html");
    $_SESSION['un'] = $_POST['username'];
    $_SESSION['pwd'] = $_POST['password'];
    while($rr=$r->fetch_assoc())
    {
        echo "<script>alert('Login Successfull');;window.location.href='uhome.php';</script>";
    }
}
else
{
    echo "<script>alert('Invalid Details');window.location.href='login.html';</script>";
}

?>