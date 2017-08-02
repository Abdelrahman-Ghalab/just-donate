
<?php   

session_start();
if(isset($_SESSION['granted']) && $_SESSION['granted'])
{
	

?>
<html>
	<head>
	   <title>DonateFH - user page</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
	</head>
	<div id="name" style="display: none;">
	<?php  echo $_SESSION['uname'];?>
	</div>
	<script>
	window.onload = notify;
	function notify(){
	var name = document.getElementById("name").textContent;
	if (window.XMLHttpRequest) {
		var xmlhttp=new XMLHttpRequest();
	} 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
		var x = this.responseText;
		$("#notification").fadeIn("slow").append(x);
		$(".dismiss").click(function(){
			$("#notification").fadeOut("slow");
		});
			}
		}
		
		xmlhttp.open("GET","notify.php?q="+name,true);
		xmlhttp.send();
	
	
	}
	</script>
	
	
	
	
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
					<li>
					<div id="notification" style="color: white; margin-top: 15; font-family:Helvetica Neue;font-weight:bold; display:none;" >
							<span class="dismiss"><a title="dismiss this notification">x</a></span>
					</div>	
					</li>
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Donate</a>
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
                <div class="intro-lead-in">Donate From Your Home!</div>
                <div class="intro-heading"><?php  echo "Welcome\n".$_SESSION['uname'];  ?></div>
                <a href="#contact" class="page-scroll btn btn-xl">Want to donate?</a>
            </div>
        </div>
    </header>
	
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
				 <h2 class="section-heading"> <?php
				   if(isset($_GET['hint']))
					   echo $_GET['hint'];
				 
				 ?> </h2>
                    <h2 class="section-heading">Donate!</h2>
                    <h3 class="section-subheading text-muted">Enter the specification of the item you want to give away</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="donate" id="contactForm" method = "post" action="donate.php" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="The item *" name = "item_name"id="item_name" required data-validation-required-message="Please enter the item you want to donate.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="quantity *" name = "quantity" id="quantity" required data-validation-required-message="Please enter the quantity.">
                                    <p class="help-block text-danger"></p>
                                </div>
								
                                <div class="form-group">
                                    <select class="form-control" name = "category">
										<option value="">Select a category:</option>
										<option value="clothes">clothes</option>
										<option value="electronics">electronics</option>
										<option value="stationery">stationery</option>
										<option value="house tools">house tools</option>
									</select>
                                </div>
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" style="float: left; margin-left: 50;"class="btn btn-xl">Enter your donation!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
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

	<?php
	
}

else 
{
	header("Location: index.php");
}

	?>
	