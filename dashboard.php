<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">SIDE <b>BAR</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
	</header>
	<div class="body">
		<nav class="side-bar">
			<ul>
				<li>
					<a href="dashboard.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
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
		<div class="card">
		<?php
		$sql = "SELECT * from users";
		include 'db.php';
		
		if ($result = mysqli_query($con, $sql)) {
			$rowcount = mysqli_num_rows( $result );
			echo $rowcount;
		 }
		?>
		</div>
        <h1>WELCOME</h1>
        <b>"<mark><?php echo $_SESSION['username']; ?></mark>"</b>
        <p>You are in user dashboard page.</p>
		</section>
	</div>

</body>
</html>