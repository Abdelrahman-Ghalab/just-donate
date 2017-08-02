<?php

session_start();
if(isset($_SESSION['granted']) && isset($_SESSION['uname']) && $_SESSION['granted']&& $_SESSION['uname'] )  {
$name = ($_GET['q']);
$con = mysqli_connect('localhost','root','','donate');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"donate");
$query=$con -> prepare('SELECT Distinct m.username,i.checked From matched m, users u, items i where u.username=? and i.username=u.username and i.item_id=m.item_id');
$query -> bind_param('s',$name);
$query->execute();
$query->store_result();
$query->bind_result( $username,$checked);




while($query->fetch()) {
if($checked=="yes")
	echo "you are matched with ".$username." NGO <br>";

}
mysqli_close($con);

}
else {
	
	header("Location: index.php");
} 
?>