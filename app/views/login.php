
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
			<h2>Input to site</h2>
			<?php echo Form::open(array('method' => 'post'));?>
			<p>
				<?php echo Form::text('login', null, array('id' => 'login', 'placeholder' => 'Your login', 'required')); ?>
			</p>
			<p>
				<?php echo Form::password('password', array('id' => 'password', 'placeholder' => 'Your password', 'required')); ?>
			</p>
			<?php echo Form::button('login', array('id'=>'button', 'type' => 'submit'));?>
            <?php echo Form::close();?>

            <?php if (isset($errors) || isset($messageauth)):?>
			<div class="errorsblock">	
				<h1>Errors:</h1>
				<span><?=$errors; ?></span>
				<span><?=$messageauth;?></span>
			</div>
		    <?php endif; ?>				
		</center>
	</div>
        <?php include __DIR__.'/footer.php';?>
	</body>	
</html>

