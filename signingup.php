<?php
require ('dbconn.php');
if($conn -> connect_error)
	die ("connection failed". $conn-> connect_error);
header('Location: indeasdasdx.php');
header('content-type: text/json');
 
$name = $_POST['username'];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password =$_POST["password"];
$address =$_POST["address"];
$city =$_POST["city"];


if($name == "" || $password == "" || $fname == "" || $lname == "" || $address == "" || $email == "" || $city == "" ||
$name == "undefined" || $password == "undefined" || $fname == "undefined" || $lname == "undefined" || $address == "undefined" || $email == "undefined" || $city == "undefined"
)
{  


}//echo "insert all data";
else{
	$exist = false;
	$query = $conn->prepare ("SELECT username FROM users WHERE username=?");
        $query->bind_param('s',$name);
        $query->execute();
	$query->store_result();
	$query->bind_result($result);
	while($query->fetch())
          {  
                if(!empty($result))
                {  
			    
			
			$exist=true;
			}

}


$query->close();

if($exist){
	
	//echo "the User Exist use another username";


	
	
}
else 
{
	
	$query = $conn->prepare ("insert into users  values (?,?,?,?,?,?,'user',?)");
        $query->bind_param('sssssss' ,$password,$name,$lname,$fname,$email,$address,$city);
        $query->execute();

	
	//	echo "Account Created";
	$query->close();
	


	

}
echo json_encode(array('exists' => $exist));

}
?>