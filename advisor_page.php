<?php

@include 'confige.php';

session_start();

if(!isset($_SESSION['advisor_name'])){
   header('location:login_form.php');
}

?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="csss/styles.css">
	<!-- <link rel="stylesheet" href="styl.css"> -->
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">LUF</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<h2 class="u-name">Advisor dashboard</b>
	</header>
	<div class="body">
		<nav class="side-bar">
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Home</span>
					</a>
				</li>
				<li>
					<a href="indexadvisor.php">
					<i class="fa fa-comment-o" aria-hidden="true"></i>
						<span>Chat</span>
					</a>
				</li>
				<li>
					<a href="advisoruser.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>User</span>
					</a>
				</li>
				<li>
					<a href="logout.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>WELCOME ADVISOR</h1>
		</section>
	</div>

</body>
</html>
