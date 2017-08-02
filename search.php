<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

session_start();
if(isset($_SESSION['granted']) && isset($_SESSION['ngo']) && $_SESSION['granted']&& $_SESSION['ngo'] )  {

$city = ($_GET['q']);
//$category = ($_GET['p']);
//$con = new mysqli
$con = mysqli_connect('localhost','root','','donate');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"donate");
//onsubmit="showUser()"
//fname, lname, address, item_name  FROM items i, users u WHERE u.city = $city and u.username = i.username
//if($city == "Byblos")
$query=$con-> prepare ('Select COUNT(*) from matched where username=?');
    $query->bind_param('s',$_SESSION['uname']);
	$query->execute();
	
	$query->store_result();
	$query->bind_result($f);
	while($query->fetch()) {      $matched=$f; }
	$query->close();
	
	
	$query=$con-> prepare ('Select COUNT(*) from items where checked="yes"');
   
	$query->execute();
	
	$query->store_result();
	$query->bind_result($f);
	while($query->fetch()) {      $yes=$f; }
	$query->close();
	
	
		$query=$con-> prepare ('Select COUNT(*) from items where checked="no"');
   
	$query->execute();
	
	$query->store_result();
	$query->bind_result($f);
	while($query->fetch()) {      $available=$f; }
	$query->close();
	
	
		$query=$con-> prepare ('Select COUNT(*) from users where category="ngo"');
   
	$query->execute();
	
	$query->store_result();
	$query->bind_result($f);
	while($query->fetch()) {      $ngo=$f; }
	$query->close();
	
	$limit = intval((1-($matched*$ngo/3)/$yes)*$available);
	


$query=$con -> prepare ('SELECT i.item_id,u.fname,u.lname,address,item_name,item_category,quantity From users u, items i where u.city=? and  u.username=i.username and checked="no" Limit ?');
$query -> bind_param('si',$city,$limit);
$query->execute();
$query->store_result();
$query->bind_result($item_id,$fname,$lname,$address,$item_name,$item_category,$quantity);


//print_r($result);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>address</th>
<th>item_name</th>
<th>quantity</th>
<th>category</th>

</tr>";

while($query->fetch()) {
    echo "<tr>";
    echo "<td>" . $fname . "</td>";
    echo "<td>" . $lname . "</td>";
   echo "<td>" . $address . "</td>";
   echo "<td>" . $item_name . "</td>";
echo "<td>" .$quantity ."</td>";//$row['quantity'] 
	echo "<td>" . $item_category . "</td>"."<td id=$item_id > <input onclick='match(this)' type = 'submit' name=$item_id value = 'Add To The List' /></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);

}
else {
	
	header("Location: index.php");
} 
?>
</body>
</html>
