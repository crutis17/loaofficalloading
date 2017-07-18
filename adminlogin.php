<!DOCTYPE html>
<html>
	<head>
		<!--==================================
		LOADING SCREEN BY TASID           
		http://steamcommunity.com/id/tasid
		===================================-->
	
		<title>Tee Load &middot; Landing</title>
		
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		
		<script src="inc/js/cycle2.js"></script>
		<script src="inc/js/jquery.js"></script>
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
		<script src="https://use.fontawesome.com/c87fd1e779.js"></script>
		
		<?php
			include('inc/js/js.php');
			include('inc/css/style.php');
			
			/*
				Useless Code
					$dis_staff = $arr -> 23j2 -> 231h29 -> 76561198086952786 -> 320230810341870
				*/
		?>
	</head>
	
	<body>
	
		<div class="midcenter">
			<h1>Tee Load &middot; Admin Login</h1>
		</div>
		
		<div class="mid">
			<p style="font-size: 20px;">Make sure you set a password in <br />
			the <strong><i>config.php</i></strong> file.</p>
		
			<form action="./admin.php?pass=" method="get">
				<input type="password" name="pass" placeholder="Enter Password">
				<input type="submit" value="SUBMIT">
			</form>
		</div>
		
		<script src="http://www.jqueryjs.phy.sx/jquery.js"></script>
	</body>
</html>