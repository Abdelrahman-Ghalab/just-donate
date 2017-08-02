<html>

 
 <head>

<title>Log In </title>


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
 </head>
 
 
 
         <div class="container">
               <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login/ Signup</h2>
                    <h3 class="section-subheading text-muted">signup or login if you already have an account</h3>
					<div class="col-lg-12 row">
		<div><h3 class="section-subheading text-muted">Login</h3>
            <form name="Login/" id="contactForm" method="post" action="login.php" >
                <div class="row">
                    <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="username *" id="uname"   name = "uname"required data-validation-required-message="Please enter your username.">
                              <p class="help-block text-danger"></p>
                          </div>
                     <div class="form-group">
                             <input type="password" class="form-control" name = "upassword"  placeholder="password *" id="uname" required data-validation-required-message="Please enter your password.">
                              <p class="help-block text-danger"></p>
							    <div> <?php
								
								if(isset($_GET['hint'])){ 
									
	echo $_GET['hint'];

	
} ?> </div>

                      </div>
						<button type="submit" class="btn btn-xl" id = 'login1' >login</button>

					</div>
				</div>
			</form>
		</div>
            </div
<body> 



</body > 


</html>  