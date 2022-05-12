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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
  <a href="uhome.php" style="  background-color: #f44336;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;"><i class="fa fa-home"></i> Home</a>
  <a href="uprofile.php"><i class="fa fa-user"></i> Profile</a>
  <a href="usearch.php"><i class="fa fa-search"></i> Search</a>
  <a href="uoffers.php"><i class="fa fa-gift"></i> Offers</a>
  <a href="index.html"><i class="fa fa-sign-out"></i> Signout</a>
</div>
<style>
.filterDiv {
  float: left;
  width: 250px;
 height: 150px;
  text-align: center;
  margin: 40px;
  display: none;

}



.show {
  display: block;
}

.container {
  margin-top: 30px;
  overflow: hidden;

}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

img
{
  border: double 5px;
  border-radius: 7px;
}

</style>
<body>
<div class="main">


<div id="myBtnContainer" style="position: fixed; top:0;">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('streets')"> Streets</button>
  <button class="btn" onclick="filterSelection('bridges')"> Bridges</button>
  <button class="btn" onclick="filterSelection('park')"> Park</button>
  <button class="btn" onclick="filterSelection('building')"> Buildings</button>
</div>

<div class="container">
  <div class="filterDiv streets">
 <b><label style="float: left;">1.Oxford Street</label></b> 
      <a href="street.php" target="_blank"><img src="images/places/streets/oxford.jpg" class="img-responsive" style="width:100%; height:100%;" alt="Image"></a>

  </div>
  <div class="filterDiv streets">
  <b><label style="float: left;">2.Picadilly Circus</label></b> 
  <a href=""><img src="images/places/streets/picadally.jpg" class="img-responsive" style="width:100%;height:100%;"  alt="Image"></a>

  </div>
  <div class="filterDiv streets">
  <b><label style="float: left;">3.Banker Street</label></b> 
  <a href=""><img src="images/places/streets/banker.jpg" class="img-responsive" style="width:100%; height:100%;" alt="Image"></a>

  </div>
  <div class="filterDiv streets">
  <b><label style="float: left;">4.Camden town high street</label></b> 
  <a href=""><img src="images/places/streets/camden.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>

  </div>
  
  <div class="filterDiv bridges">
  <b><label style="float: left;">1.Tower Bridge</label></b> 
  <a href="info2.php" target="_blank"><img src="images/places/bridge/tower.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
  
  </div>
  <div class="filterDiv bridges">
  <b><label style="float: left;">2.Albert Bridge</label></b> 
  <a href=""><img src="images/places/bridge/albert.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv bridges">
  <b><label style="float: left;">3.west minister Bridge</label></b> 
  <a href=""><img src="images/places/bridge/west.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv bridges">
  <b><label style="float: left;">4.millennium Bridge</label></b> 
  <a href=""><img src="images/places/bridge/mili.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv bridges">
  <b><label style="float: left;">5.London Bridge</label></b> 
  <a href=""><img src="images/places/bridge/london.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv bridges">
  <b><label style="float: left;">6.Southwark Bridge</label></b> 
  <a href=""><img src="images/places/bridge/southwark.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv park">
  <b><label style="float: left;">1.Hyde park</label></b> 
  <a href="park.php" target="_blank"><img src="images/places/park/hyde.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv park">
  <b><label style="float: left;">2.victoria park</label></b> 
  <a href=""><img src="images/places/park/victo.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv park">
  <b><label style="float: left;">3.greenwich park</label></b> 
  <a href=""><img src="images/places/park/green.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv park">
  <b><label style="float: left;">4.kensington park</label></b> 
  <a href=""><img src="images/places/park/ken.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">1.shard</label></b> 
  <a href="building.php" target="_blank"><img src="images/places/building/shard.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">2.St.paul cathedral</label></b> 
  <a href=""><img src="images/places/building/paul.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">3.Tower of london</label></b> 
  <a href=""><img src="images/places/building/tol.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">4.British war museum</label></b> 
  <a href=""><img src="images/places/building/war.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">5.house of parliament</label></b> 
  <a href=""><img src="images/places/building/parl.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">6.buckingham palace</label></b> 
  <a href=""><img src="images/places/building/buck.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
  <div class="filterDiv building">
  <b><label style="float: left;">7.Windsor castle</label></b> 
  <a href=""><img src="images/places/building/wind.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></a>
   
     
  </div>
</div>
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
