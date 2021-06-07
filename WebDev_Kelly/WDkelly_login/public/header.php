<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/header-footer.css" type="text/css">

<!-- reference copy Font Awesome start -->
<script src="https://kit.fontawesome.com/03d3a58230.js" crossorigin="anonymous"></script>

<title>WeFly Airline - Admin</title>
</head>
<body>

<?php
//burger menu (W3Schools)*****
// homepage content starts *(class exercises)******
//using variables to set the menu *(class exercises)******
$index = "Home";
$freestyle = "FreeStyle - New Login";
$welcomein = "Welcomein";
$departments = "Departments";
$employee ="Employee";



echo '<div class="logo"><a href="index.php"><img src="../img/WeFly1.png" width="300px" height="130px" /></a></div>';
echo "<div class='topnav' id='myTopnav'>";
echo "<a href='./index.php' class='active'> $index </a>";
echo "<a href='./freestyle.php'>$freestyle</a>";
echo "<a href='./welcomein.php'>$welcomein</a>";
echo "<a href='./departments.php'>$departments</a>";
echo "<a href='./employee.php'> $employee </a>";

echo "<a href='javascript:void(0);' class='icon' onclick='myFunction()'><i class='fa fa-bars'></i></a></div>";
?>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
