<?php

session_start();

require ("dbconn.php");
if($conn -> connect_error)
	die ("connection failed". $conn-> connect_error);
$name = $_POST["uname"];
$upassword = $_POST["upassword"];
$rpass ="";

if($name == "" && $upassword == "")
	echo "insert username and password";
 
else{
	$exist = false;
	$query = $conn->prepare ("SELECT password,category FROM users WHERE username=?");
        
		$query->bind_param('s',$name);
        $query->execute();
	$query->store_result();
	$query->bind_result($result,$category);
	while($query->fetch())
          {  
                if(!empty($result))
				{    $exist=true;
			  $rpass=$result;
				}
}
$query->close();
$conn->close();
if($exist ){
	
	
	if($rpass==$upassword) {
		$_SESSION['granted'] =true; 
		$_SESSION['uname'] =$name; 
		 if( $category != "user")
		 { $_SESSION['ngo']=true;
	 header('Location: ngo.php');
	 }
		else {
		echo "granted";
		header('Location: user.php'); }
		
	}
	else { 
	$_SESSION['granted']=false;
	$hint= "Access Denied";
	header("Location: login1.php?hint=$hint");
	
	}
	
	}
else {
	$hint= "User Does Not exist";
	header("Location: login1.php?hint=$hint");
	
	echo "username doesnt exist ";
     echo "<br><a href = 'index.php'> Back</a>";

}
$x = "";
if (!$exist)
	$x="0";
else if ($exist && !$_SESSION['granted'])
	$x='2';
else if ($exist && $_SESSION['granted'] ) {$x="1";}
echo json_encode(array('exists' => $x));
}




?>