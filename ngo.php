
<?php

session_start();

if(isset($_SESSION['granted']) && isset($_SESSION['ngo']) && $_SESSION['granted'] && $_SESSION['ngo'] )
{
?>
<html>
	<head>
	   <title>DonateFH - user page</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Theme CSS
			<source src="ajax_user.js"></source>

	-->
						    <link href="css/agency.min.css" rel="stylesheet">


	</head>
		
	
	
	
	
	
	<body id="page-top" class="index">
	
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">JustDonate</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Search</a>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="logout.php">log out</a>
                    </li>
                  
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	  <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">collecting donations now is much easier!</div>
                <div class="intro-heading">get all contacts of people who want to donate within a city</div>
                <a href="#contact" class="page-scroll btn btn-xl">make a search?</a>
            </div>
        </div>
    </header>
	
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">search for donations!</h2>
                    <h3 class="section-subheading text-muted">pick the city and the category of donations you are looking for</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="donate"  novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name= "city" id="city" oninput="showUser()" class="form-control">
										<option value="">Select a city:</option>
										<option value="Beirut">Beirut</option>
										<option value="Byblos">Byblos</option>
										<option value="Tripoli">Tripoli</option>
										<option value="Tyre">Tyre</option>
									</select>
                                </div>
								
                                <div class="form-group">
                              <!--      <select name ="category" id="category" oninput="showUser()" class="form-control">
										<option value="">Select a category:</option>
										<option value="clothes">clothes</option>
										<option value="electronics">electronics</option>
										<option value="stationery">stationery</option>
										<option value="house tools">house tools</option>
									</select> -->
                                
                                </div>
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <button type="submit"  style="float: left; margin-left: 50;"class="btn btn-xl">Gooo!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
						<div id="txtHint2"><b></b></div>

	
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy;justdonate2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
	<script>
	function showUser(){
	
	var city = document.getElementById("city").value;
	
  if (city=="") {
    document.getElementById("txtHint2").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
		var xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
		
      document.getElementById("txtHint2").innerHTML=this.responseText;
    }
  }//+"p="+category
  xmlhttp.open("GET","search.php?q="+city,true);
 
  xmlhttp.send();
}

	function match(param){
	
	var item = param.name;
	
	
  
  if (window.XMLHttpRequest) {
		var xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
		
      document.getElementById(item).innerHTML="<p>Checked</p>";
    }
  }//+"p="+category
  xmlhttp.open("GET","match.php?q="+item,true);
 
  xmlhttp.send();
}
	</script>
	 <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

	</body>
	</html> <?php
	
	
} else {header("Location: index.php");} 
	
	?>