<!DOCTYPE html>
<html lang="en">
	<head>



		<meta charset="UTF-8">

		<!-- sets IE rendering to IE-EDGE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

		<!-- sets viewport width to device width, scaling 1:1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- fontawesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href='https://fonts.googleapis.com/css?family=Noto+Sans|Arimo' rel='stylesheet' type='text/css'>



		<!-- minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<link href='https://fonts.googleapis.com/css?family=Noto+Sans|Arimo' rel='stylesheet' type='text/css'>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="css/stylesheet.css" type="text/css">


		<title>simplexrex.com</title>
	</head>
	<body class="sfooter" background="documentation/images/background.2.jpg">
		<div class="sfooter-content">

			<header>
				<div class="container">
					<nav class="navbar navbar-inverse" role="navigation">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">simplexrex.com</a>
						</div>

						<div>
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="https://github.com/fgarcia132"><i class="fa fa-github"
																												  aria-hidden="true"></i>
								</a></li>
								<li class="active"><a href="https://twitter.com/simplexrex"><i class="fa fa-twitter-square"
																													aria-hidden="true"></i>
								</a></li>
								<li class="active"><a href="https://www.linkedin.com/in/francisco-garcia-942004122"><i
									class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</nav>
				</div>


			</header>

			<main>
				<div class="container">
					<div class="row">

						<!--welcome section-->
						<div class="col-xs-0 col-md-12 well text-center">
							<h1>Francisco Garcia</h1>
							<p>Full Stack Web Developer</p>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="well">
									<h4>About Me</h4>
										<p>I'm a Web Developer that is based between Seattle and Albuquerque. </p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="well">
									<h4>Services Provided</h4>
										<p>If you're a small to medium sized business that is looking to expand their reach online I can:</p>
									<ui>
										<li>Build  a clean functional Website</li>
										<li>Work with you to build it to your wants and needs</li>
										<li>Search Engine Optimization (SEO) to broaden consumer base </li>
									</ui>
								</div>
							</div>
						</div>
					</div><!--/.row-->
				</div><!--/.container-->
			</main>

		</div>
		<!--Begin Contact Form-->
		<form id="contact-form" action="php/mailer.php" method="post">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="well text-center">
					<div class="form-group ">
						<label for="name">Name <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
						</div>
					</div>
				</div>
			</div>

			<!-- reCAPTCHA -->
			<div class="g-recaptcha" data-sitekey="6LcpcSITAAAAAGJiQIo1JEtpk_1SNrmH17J8elCB"></div>

			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>

		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="foot-content">

						</div>
					</div>
					<div class="col-md-6">
						<div class="foot-content text-right">
							<div>
								<ul class="nav navbar-nav navbar-inverse navbar-right">
									<li class="active"><a href="https://github.com/fgarcia132"><i class="fa fa-github"
																													  aria-hidden="true"></i>
									</a></li>
									<li class="active"><a href="https://twitter.com/simplexrex"><i class="fa fa-twitter-square"
																														aria-hidden="true"></i>
									</a></li>
									<li class="active"><a href="https://www.linkedin.com/in/francisco-garcia-942004122"><i
										class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="copyright text-center">
							&copy; 2016
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>