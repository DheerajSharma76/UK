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

img {
        width:  70%;
    height: 100%;
    object-fit: cover;
margin-left:20px;



  border: double 5px;
  border-radius: 7px;
   
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
  <a href="uprofile.php"><i class="fa fa-user"></i> Profile</a>
   <a style="  background-color: #f44336;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;" href="usearch.php"><i class="fa fa-search"></i> Search</a>
  <a href="uoffers.php"><i class="fa fa-gift"></i> Offers</a>
  <a href="index.html"><i class="fa fa-sign-out"></i> Signout</a>
</div>

<div class="main">
<form method="post">
  <div class="container">
  <!-- <div class="row"> -->
  <div  id="f">
<h3>Tell Us About Your Interests:</h3>
<h4>Please Answer Feew Questions To Get The Best Results</h4>
Q. Do you walk to travel in order to explore the world ? <br> If yes please select street option <input style="width:5%;"  type="checkbox" name="in[]" value="streets" id="">streets
<br><br>
Q. Do you like to see historic infrastructure and mind blowing construction ? <br> If yes then Please visit some popular bridges <input style="width:5%;"  type="checkbox" value="bridges" name="in[]"  id="">bridges
<br><br>
Q. If you like to enjoy the nature then please selec the park option <input style="width:5%;"  type="checkbox" value="park" id="" name="in[]" >park
<br><br>
Q. Have interest in history ? Click to visit some famous Buildings <input style="width:5%;"  type="checkbox" value="building" name="in[]"  id="">building
<br><br>
Q. For How many days would you like to travel ? <input type="radio" name="days"  required   value="2" > 2 Days  &nbsp;&nbsp; <input type="radio" name="days"  required   value="3" > 3 Days

<br><br>
<input type="submit" class="btn btn-primary" value="Suggest Me" name="find">

</div>
</form>

<?php
$f=fopen("data.csv","r");
if(isset($_POST['find']))
{
  if(isset($_POST['in']))
  {
  $a=$_POST['in'];

  if(sizeof($a)==1||sizeof($a)==0)
  {
    echo "select more than one interest";
  }
  else
  {
   


$data=implode(";",$a);
echo "<ol>";
foreach ($a as $k) {
// echo "<li>$k</li>";
}
echo "</ol>";
// echo $data;
$nd= str_replace(";",",",$data);

  //code...

while($row=fgetcsv($f,null,","))
{
 
  if($row[0]==$_POST['days']&&$row[1]==$data)
  {
    $_SESSION['pl']=$row[2];
    $np= str_replace(";",",",$row[2]);
    echo "<h3 align=center>Our Suggested Tour to make your trip special and memorable<br> for $_POST[days] Days having interest in $nd is</h3>";
if($row[0]==2)
{
$d1=explode(";",$row[3]);
$d2=explode(";",$row[4]);
$d4=explode(";",$row[2]);

    // echo "<br>Total Places:".$row[2]."  <br>Day 1:".$row[3]." <br>Day 2:".$row[4]." <br>Budget:".$row[6];
  echo "<br>Total Places: <b>".$np."</b>  <br>Day 1: <b>".$d1[0]."</b> <br>Day 1: <b>".$d1[1]."</b><br>Day 2: <b>".$d2[0]."</b><br>Day 2: <b>".$d2[1]."</b> <br>Budget: <b>£".$row[6]."</b>";
    echo "<br><h3 align=center>We wish you to have a nice tour provided by us</h3><script>document.getElementById('f').style.display='none';</script>";

?>



<!--  -->
<br><br>

<div class="row">





  <?php
for($nk=0;$nk<sizeof($d4);$nk++)
{
 ?>
 <div class="col">
      <img src="trip/<?php echo $d4[$nk];?>.jpg" alt="<?php echo $d4[$nk];?>">
      
      </div>
      <?php
    
?>
    
      
    <?php

}
?>
<!--  -->

<br><br>
</div>

</div>
<?php





  }
if($row[0]==3)
{ 
  $d1=explode(";",$row[3]);
$d2=explode(";",$row[4]);
$d4=explode(";",$row[2]);

// echo "<br>Total Places:".$row[2]."  <br>Day 1:".$row[3]." <br>Day 2:".$row[4]." <br>Day 3:".$row[5]." <br>Budget:".$row[6];
echo "<br>Total Places: <b>".$np."</b>  <br>Day 1:<b> ".$d1[0]." </b><br>Day 1:<b> ".$d1[1]."</b><br>Day 2:<b> ".$d2[0]."</b></br>Day 2:<b> ".$d2[1]." </b><br>Day 3:<b> ".$row[5]."</b><br>Budget:<b> £".$row[6]."</b>";

echo "<br><h3 align=center>We wish you to have a nice tour provided by us</h3><script>document.getElementById('f').style.display='none';</script>";

?>
<!--  -->

<br><br>
<div class="row">

 <?php
for($nk=0;$nk<sizeof($d4);$nk++)
{

?>
    <div class="col">
      <img src="trip/<?php echo $d4[$nk];?>.jpg" alt="<?php echo $d4[$nk];?>">
      </div>
     

    <?php



}

?>



<br><br>

</div>

</div>
<!--  -->
<?php
} 
}
}

}
}
else{
  echo "select more than one interest";
}
}

?>

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
<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  </script>
</html> 
