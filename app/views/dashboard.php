<!DOCTYPE html>
<html>
	<head>
		<title><?= $title; ?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>	
	<body>
		<?php include __DIR__.'/header.php';?>
		<div class="content">
			<center>		
				<a href="/">HOME</a>
        		<div class="dashboard">
					<h2>Wellcome <span id="uname"><?=$uname;?></span> to your dashboard.</h2></br>
					<a href="logout">Logout</a>
  				</div>
 			</center>
 		</div>
        <?php include __DIR__.'/footer.php';?>
	</body>	
</html>
