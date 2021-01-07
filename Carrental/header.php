<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo"> HIRERIDE</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="index.php">Rent</a></li>
						<li><a href="message_admin.php">Contact Us</a></li>
						<li><a href="account.php">Client Login</a>
					    <li><a href="login.php">Admin Login</a>
					</ul>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
								<li><a href="admin/logout.php">Logout</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>