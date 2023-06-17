<?php
	session_start();
?>
<html>
	<head>
		<title>INDIAN AIRLINES</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<!-- <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css"> -->
<style>
#title {
  color: rgb(66, 147, 240);
  text-align: center;
  font-size: 32px;
  margin-top: 50px;
}

</style>

	</head>
	<body>
		
		<img class="logo" src="images\logopic.jpg"width="750px" height="50px"> 
		<h1 id="title">INDIAN AIRLINES</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						} else if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						} else {
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						} else if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						} else {
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<img src="images\bgk.jpg" width=100% height=85%>
		</div>
		<!--check out adding localhost in links and other places
			shift login/logout buttons to the right side
		-->
	</body>
</html>