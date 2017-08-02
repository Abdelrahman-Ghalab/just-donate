<?php
session_start();
if(isset($_SESSION['granted']) && isset($_SESSION['ngo']) && $_SESSION['granted']&& $_SESSION['ngo'] )  {

$item= ($_GET['q']);
//$category = ($_GET['p']);
//$con = new mysqli
$con = mysqli_connect('localhost','root','','donate');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"donate");


        $serialnumber=0;
	 
	  
	  $query = $con->prepare ("Update items SET checked='yes' Where item_id=? ");
	  $query-> bind_param('i',$item);
 
   $query->execute();
   $query ->close();
   
  $query = $con->prepare ("INSERT INTO matched VALUES (?,?,CURDATE(),CURTIME())");
 $query-> bind_param('is',$item,$_SESSION['uname']);
  $query->execute();
   $query ->close();
   echo 1;




}
else {
	echo 0;
	header("Location: index.php");
} 


?>
