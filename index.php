<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
		<title>Sign Up & Login</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<!-- === Navbar === -->
		<nav class="navbar navbar-expand-sm navbar-light bg-light custom-nav">
			<!-- Container -->
			<div class="container">
				<a href="#" class="navbar-brand">Signup & Login</a>
				<!-- Button -->
				<button type="button" class="navbar-toggler" data-target="#mynav" data-toggle="collapse">  
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Home</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- === Navbar Close === -->
		
		<!-- === Container === -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Col -->
				<div class="col-md-8 content">
					<h1>Its always free</h1><hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				
				<!-- Col -->
				<div class="col-md-4 content">
					<div class="signup-cover">
						<!-- Card -->
						<div class="card">
							<!-- Card Header -->
							<div class="card-header">
								<!-- Row -->
								<div class="row">
									<!-- Col -->
									<div class="col-md-9">
										<h3 class="form-heading">Signup</h3>
										<p>Account is creating is 100% free so please create the account</p>
									</div>
									<!-- Col -->
									<div class="col-md-3 text-right">
										<i class="fa fa-pencil-square-o fa-3x"></i>
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<!-- Form -->
								<form>
									<!-- Form Group -->
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name....">
										<div class="name-error error"></div>
									</div>
									<!-- Form Group -->
									<div class="form-group">
										<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email....">
										<div class="email-error error"></div>
									</div>
									<!-- Form Group -->
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password....">
										<div class="password-error error"></div>
									</div>
									<!-- Form Group -->
									<div class="form-group">
										<input type="password" name="confirm" id="confirm" class="form-control" placeholder="Confirm Password....">
									</div>
									<!-- Form Group -->
									<div class="form-group">
										<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>
									</div>
									<div class="form-group">
										<a href="#" id="login">Already have an account?</a>
									</div>
								</form>
							</div>	
						</div>
						<!-- Card Close-->
					</div>	
					<!-- Signup-cover Close -->

					<!-- Login-cover -->
					<div class="login-cover">
						<!-- Card -->
						<div class="card">
							<!-- Card Header -->
							<div class="card-header">
								<!-- Row -->
								<div class="row">
									<!-- Col -->
									<div class="col-md-9">
										<h3 class="form-heading">Login</h3>
										<p>Enter Email && Password</p>
									</div>
									<!-- Col -->
									<div class="col-md-3 text-right">
										<i class="fa fa-lock fa-3x"></i>
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<!-- Form -->
								<form>
									<!-- Form Group -->
									<div class="form-group">
										<input type="text" name="email" id="email" class="form-control" placeholder="Enter Email....">
									</div>
									<!-- Form Group -->
									<div class="form-group">
										<input type="text" name="password" id="password" class="form-control" placeholder="Enter Password....">
									</div>
									<!-- Form Group -->
									<div class="form-group">
										<button type="button" id="login" class="btn btn-success btn-block form-btn">Login</button>
									</div>
									<div class="form-group">
										<a href="#" id="signup">Create New Account?</a>
									</div>
								</form>
							</div>	
						</div>
					</div>
					<!-- Login Close-->
				</div>
			</div>
		</div>
		<!-- === Container Close === -->
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/simple.js"></script>
		<script type="text/javascript" src="assets/js/signup.js"></script>
	</body>
</html>
