<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
		html css and bootstrap 4 simple landing page
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="index.css" />
    <style>
    body{
	margin:0;
	padding:0;
	background:#fff;
	font-family: 'Raleway',sans-serif;
	color: #fff;
}
.banner{
	height: 100vh;
	width: 100%;
	background:url('overlay.png'),url('banner.jpg');
	background-position: top;
	background-size:cover;
	/*background-attachment: fixed;*/
	background-repeat: no-repeat;
}
.banner .navbar{
	margin-top:4%;
}
.banner .navbar-brand{
	color: #fff;
	font-size:1.8em;
	font-weight: 700;
	margin-left: 10%;
}
.banner .nav{
	margin-right:10%; 
}
.banner .nav li a{
	color:#aaa;
	font-size: 1.2em;
}
.banner .info{
	margin-top:15%;
	transform: translateY(-15%);
}
.banner .info h1{
	font-size: 2.5em;
	font-weight: 700;
	color: #fff;
	letter-spacing: 2px;
}
.banner .info p{
	font-size: 2em;
	font-weight: 500;
	color: #aaa;
	letter-spacing: 2px;
}
.banner .info a{
	margin-left:50%;
	transform: translateX(-50%);
	color: #fff;
	background: #e91d43;
	padding:10px 20px; 
	font-size: 2em;
	font-weight: 600;
}
.banner .info a:hover{
	background: #e91e63;
}
    </style>
</head>
<body>
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand">SPITAL</div>
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="#">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">PORTFOLIO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ABOUT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">CONTACT</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center">SPITAL</h1>
				<p class="text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing
				</p>
				<a href="#" class="btn btn-md text-center">GET STARTED</a>
			</div>
		</div>
	</div>
</body>
</html>