<?php
$con=new mysqli("localhost","root","","uk");
$q="insert into login values('".$_POST['name']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."')";
$r=$con->query($q);
if($r===true)
{
    header("location:index.html");
}
?>