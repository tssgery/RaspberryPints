<?php
session_start();
if(!isset( $_SESSION['myusername'] )){
header("location:index.php");
}
require '../data/config/conn.php';


// Get values from form
$name=$_POST['name'];
$style=$_POST['style'];
$brewery=$_POST'[brewery'];
$notes=$_POST['notes'];
$abv=$_POST['abv'];
$srm=$_POST['srm'];
$ibu=$_POST['ibu'];
$active=$_POST['active'];
$tapnumber=$_POST['tapnumber'];
$beerid=$_POST['beerid'];



// update data in mysql database
$sql="UPDATE beers SET name='$name', style='$style', notes='$notes', abv='$abv', srm='$srm',
ibu='$ibu', breweryId='$brewery', active='$active', tapnumber='$tapnumber' WHERE beerid='$beerid'";
$result=mysqli_query($con,$sql);

// if successfully updated.
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='beer_main.php'>Back To Beers</a>";
}

else {
echo "ERROR";
}

?>
