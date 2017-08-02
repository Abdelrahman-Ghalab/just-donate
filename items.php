<?php
session_start () ;
if (isset($_SESSION['granted']) && $_SESSION['granted'] ) {
 
	require ('dbconn.php');
	    $city;
	  $category = "";
	if (isset($_GET['p']) && $_GET['p'])
	{
		$category = $_GET['p'];
	
		$exist = false;
	
	if($category) 
	{
		 $i =0;
		 $array; 
		
	 $query = $conn -> prepare(""Select u.sname, u.fname, u.address, i.item_name
from users u , items i where i.category=? and u.username = i.username and checked='no' and u.city=?  "");

	    $query->bind_param('ss',$category, $city); 
		$query->execute();
		$query->store_result();
		$query->bind_result($sname,$fname, $address, $item);
		
		while ($query->fetch())
		{
			
			if (!empty($fname)&& $fname!="")
			{$exist = true;
		
		    $array[$i]=[$sname,$fname, $address, $item];
			$i++;
		
		
		}
			
		}
		$query->close();
		$conn->close();
		
	}
	
	  
	
		
	?> 
	   
	   <html>  
	   
	    <head>  <title>Home</title>  


   <style> 
   #buy {
	   
	  
	  display : solid;
	  width : 200px;
	   background-color : black;
	   color : white;
	   
   }   
   
   
   
   td { text-align: center;
	  
	   width:200;  
       
	
   
   }
   
   table,td,tr {   


   border: 3px solid black;
    border-collapse: collapse;  }
	
	
 
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
table a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
table a:hover {
    background-color: grey;
}
</style>
		</head> 
		<body> 
		
		
		
		
		
		
		
		   <h1> <?php echo $_SESSION['uname'];    ?></h1>
		   
		 		   <a href = "mystuff.php">My Stuff </a>

			
		<nav> 	<ul>   
			
			<li> <a href = "items.php?p=mobilephones">  Mobile Phones</a>  </li>
			  <li> <a href = "items.php?p=accessories">  Accessories</a>  </li>
			<li> <a  href = "items.php?p=menclothes" > Men's Clothes</a>  </li>
			<li> <a href = "items.php?p=womenclothes" > Women 's Clothes </a>  </li>
			<li> <a href = "items.php?p=games" > Games</a>  </li>
			<li> <a href = "items.php?p=others" >Others</a>  </li>
			
			</ul>  </nav>
			
			
			<div id = "items"> <h1>  
			<?php
			$header;
			switch ($category)
			{
				case 'mobilephones' : 
				echo "Mobile Phones";
				break;
				
				
				case 'accessories' : 
				echo "accessories";
				break;
				
				case 'menclothes' : 
				echo " Men's Clothes";
				break;
				
				case 'womenclothes' : 
				echo "Women 's Clothes";
				break;
				
				case 'others' : 
				echo "others";
				break;
				case 'games' : 
				echo "Games";
				break;
				
				
				
			}
			
			
			?>
			
			</h1>
			 <table align = center>   <?php
			  if (!$exist) echo "no items in this category";
			  else {
				  
				  foreach ($array as $item)
				  echo "      
				   <tr>  <td  style = 'background-color:d3d3d3 '>Product : </td><td> $item[0]    </td>  <td style = 'background-color:d3d3d3 '> Price : </td> <td> $item[1] $</td>   
				 <td>    <a  id = 'buy' href = 'purchase.php?item=$item[0]' >  Buy</a> </td>
				  
				  
				  </tr> 
				  
				  ";
				  
				  
				  
			  }
			  
			  
			  ?>
			</table> 
			
			</div>
			
			    
			
			
			
			
		  <hr>
		 
		
			<a id="logout" href = "logout.php"> Log Out  </a>
		</body>
	   
	   
	   </html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	   
		
	<?php }
	
	else { header('Location: home.php');} 
	}
	
	
	

 else { header('Location: index.php'); }



?>