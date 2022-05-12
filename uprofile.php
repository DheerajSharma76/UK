<?php
session_start();
if(!isset($_SESSION['un']))
{
header("location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidebar">
<a href="uhome.php"><i class="fa fa-home"></i> Home</a>
  <a style="  background-color: #f44336;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;"
   href="uprofile.php"><i class="fa fa-user"></i> Profile</a>
   <a href="usearch.php"><i class="fa fa-search"></i> Search</a>
  <a href="uoffers.php"><i class="fa fa-gift"></i> Offers</a>
  <a href="index.html"><i class="fa fa-sign-out"></i> Signout</a>
</div>

<div class="main">


<style>

    form
    {
     margin-left: 30px;
    }
  
</style>

<div id="f" style=" margin-left: 320px;">    
    <br>

<?php

$con=new mysqli("localhost","root","","uk");
$q="select * from login where username='".$_SESSION['un']."' and password='".$_SESSION['pwd']."'";
$r=$con->query($q);
if($r->num_rows>0)
{
    // header("location:index.html");
 
    while($rr=$r->fetch_assoc())
    {
        // echo "<script>alert('Login Successfull');</script>";
        
    ?>

   

<h2 style="color: red; margin-left: 150px;">Profile Page</h2>
<br>
<form  method="post" name="login" action="reg.php">
<b> <label>Name</label></b> 
    <input style="width:50%;" readonly value="<?php echo $rr['fname'];?>" type="text" name="name" placeholder="Full Name" id="name" class="form-control">
    <br>
    <b>  <label>Email</label></b> 
    <input style="width:50%;" readonly value="<?php echo $rr['email'];?>" type="email" placeholder="Email" name="email" id="em" class="form-control">
    <br>
    <b> <label>Username</label></b> 
<input style="width:50%;" readonly value="<?php echo $rr['username'];?>" type="text" class="form-control" placeholder="Username" name="username" id="user">
<br>
<b> <label>Password</label></b> 
<input style="width:50%;" readonly value="<?php echo $rr['password'];?>" type="text" class="form-control" placeholder="Password" name="password" id="pass">
<?php

    }
}
?>
</form>
<br><br>
</div>
</body>

  </div>

  <br><br>
</body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  font-family: Arial;
}

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 900px;
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}
</style>
</head>
</html> 
