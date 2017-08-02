<?php  
session_start();
require ('dbconn.php');
if($conn -> connect_error)
	die ("connection failed". $conn-> connect_error);
$item_name = $_POST["item_name"];
$quantity = $_POST["quantity"];
$category = $_POST["category"];

if (isset($_SESSION['uname'])) {




    if($item_name == "" && $quantity == "" && $category == "" )
   {
   		$hint= "Enter Data";
  header("Location: user.php?hint=$hint#contact");
	
   }
else{
	
	 $quantity =(int)$quantity;
	
	$query = $conn->prepare ("INSERT INTO `items`(`quantity`, `username`, `checked`, `item_category`, `item_name`) VALUES (?,?,'no',?,?)");
	
        $query->bind_param('isss',$quantity,$_SESSION['uname'],$category,$item_name);
        $query->execute();

	
	
		$hint= "Thank You For Your Donation";
	header("Location: user.php?hint=$hint#contact");
	
}
  



	

}
else {
	
		$hint= "Enter Data";
	header("Location: index.php");
	
	
}

?>

