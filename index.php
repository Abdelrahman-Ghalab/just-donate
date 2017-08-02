<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DonateFH - home page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <a class="page-scroll" href="#services">Our Mission</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Signup</a>
                    </li>
					 <li>
                        <a class="page-scroll"  href = "login1.php">Log In</a>
                    </li>
                  
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Donate From Your Home!</div>
                <div class="intro-heading">GIVE BACK TO YOUR COMMUNITY WITHOUT THE NEED TO MOVE FROM YOUR HOUSE!</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our mission</h2>
                    <h3 class="section-subheading text-muted">Making the donation process easier and more convenient.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"></h4>
                    <p class="text-muted">collect the stuff you want to donate or give away.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"></h4>
                    <p class="text-muted">Go online, update the website with the items you have.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"></h4>
                    <p class="text-muted">The data you enter is confidential and only accessible by the authorized organization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- login Section -->
    <section id="portfolio" class="bg-light-gray">
    
		<div> <h3 class="section-subheading text-muted">signup</h3>
			<form ng-app="" name="signup/" id="contactForm" method="POST" action="signingup.php" novalidate>
                <div class="row">
                    <div class="col-md-5">
						<div class="form-group">
                             <input type="text" class="form-control" name = "fname" placeholder="Your firstname *" oninput="val()"   id="fname" required data-validation-required-message="Please enter your firstname.">
                              <p class="help-block text-danger"></p>
                          </div>
						  <div class="form-group">
                             <input type="text" class="form-control" name = "lname" placeholder="Your lastname *"  oninput="val()"  id="lname" required data-validation-required-message="Please enter your lastname.">
                              <p class="help-block text-danger"></p>
                          </div>
                         <div class="form-group">
                             <input type="text" class="form-control" name = "username" placeholder="Your Username *" oninput="val()"  id="name" required data-validation-required-message="Please enter a username.">
                              <p class="help-block text-danger"></p>
							  <div id="txtHint"></div>

                          </div>
                     <div class="form-group">
                             <input type="email" ng-model="text" class="form-control" name = "email" placeholder="Your Email *" oninput="val()" id="email" required data-validation-required-message="Please enter your email address.">
                              <span ng-show="signup/.email.$error.email">Not a valid e-mail address</span>
                      </div>	
					  <div class="form-group">
                             <input class="form-control" placeholder="Your phone *" name = "phone"  oninput="val()"   id="phone" required data-validation-required-message="Please enter your phone number.">
                              <p class="help-block text-danger"></p>
                      </div>
					   <div class="form-group">
                             <input type="password" class="form-control" name = "password" oninput="val()"  placeholder="Your password *" id="password" required data-validation-required-message="Please enter your password.">
                              <p class="help-block text-danger"></p>
                      </div>	
					  <div class="form-group">
                             <input class="form-control" placeholder="Your address *"  oninput="val()"  name = "address" id="address" required data-validation-required-message="Please enter your address.">
                              <p class="help-block text-danger"></p>
                      </div>
					  
					  <div class="form-group">
                             <select  class="form-control" placeholder="Your City *" name = "address" oninput="val()"  id="city" required data-validation-required-message="Please enter your City.">
							 <option value="" >Enter Your City</option>
							 <option value="Beirut" >Beirut</option>
							 <option value="Tripoli" >Tripoli</option>
							 <option value="Tyre" >Tyre</option>
							<option value="Byblos" >Byblos</option>
							<option value="Batroun" >Batroun</option>
							<option value="Zahle" >Zahle</option>
							 
							 
							 </select>
                              <p class="help-block text-danger"></p>
                      </div>
					  
					  <button type="submit" class="btn btn-xl" id='signup' disabled >signup</button>
					  

					</div>
				</div>
			</form>
		</div>
		
					
                </div>
            </div>
		</div>
		
	
		
    </section>

    <!-- Team Section -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="" class="img-responsive img-circle" alt="">
                        <h4>Abdelrahman Ghalab</h4>
                        <p class="text-muted">Developer</p>
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
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="" class="img-responsive img-circle" alt="">
                        <h4>Abdalla Chamra</h4>
                        <p class="text-muted">Developer</p>
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
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
	  <h2 style ="text-align: center;"class="section-heading bg-light-gray">Our Partners</h2>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">An Organization? contact us and we will get back to you ASAP.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" ng-app="" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your Email *" ng-model="text" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p ng-show="myForm.myAddress.$error.email" class="help-block text-danger">Not a valid e-mail address</p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-xl">Send Message</button>
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

    
    <!-- jQuery -->
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
<script src="ajax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script >
		function val() {
		
	  
		
		if( document.getElementById("phone").value != "" && document.getElementById("email").value != "" &&  document.getElementById("lname").value != "" &&  document.getElementById("fname").value != "" && document.getElementById("address").value != "" 
		&& document.getElementById("password").value != "" && document.getElementById("name").value != "" && document.getElementById("city").value != ""  )
		    document.getElementById("signup").disabled = false;
		else 
			 document.getElementById("signup").disabled = true;
		} 
		</script>

	
</body>

</html>

