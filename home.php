<?php
session_start () ;
if (isset($_SESSION['granted']) && $_SESSION['granted'] ) {
 
	
	
	  
	
		
	?> 
	   
	   <html>  
	   
	    <head>  <title>Home</title>  


   <style> 
   
   
    nav {   

	
	}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
		</head> 
		<body> 
		
		
		
		
		
		
		
		   <h1> Welcome   <?php echo $_SESSION['uname'];    ?></h1>
 		   <a href = "mystuff.php">My Stuff </a>
		   
		    <h3 style = "color:blue">Categories</h3>
			
		<nav> 	<ul>   
			
			<li> <a href = "items.php?p=mobilephones">  Mobile Phones</a>  </li>
			  <li> <a href = "items.php?p=accessories">  Accessories</a>  </li>
			<li> <a  href = "items.php?p=menclothes" > Men's Clothes</a>  </li>
			<li> <a href = "items.php?p=womenclothes" > Women 's Clothes </a>  </li>
			<li> <a href = "items.php?p=games" > games</a>  </li>
			<li> <a href = "items.php?p=others" >others</a>  </li>
			
			</ul>  </nav>
			
			    
			
			<h1> Choose A Category</h1>
			
			
			
		<hr>
		
			<a href = "logout.php"> Log Out  </a>
		</body>
	   
	   
	   </html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	   
		
		<?php
	}
	
	
	

 else { header('Location: index.php'); }



?>