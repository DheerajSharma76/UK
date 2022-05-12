<?php
$con=new mysqli("localhost","root","","uk");
$q="update login set password='".$_POST['password']."' where email='".$_POST['email']."' and username='".$_POST['username']."','".$_POST['password']."')";
$r=$con->query($q);
if($r===true)
{
    header("location:index.html");
}
?>