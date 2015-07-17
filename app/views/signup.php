
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
			<h2>Registration Form</h2>
			<?php echo Form::open(array('method' => 'post'));?>
			<p>
				<?php echo Form::text('login', null, array('id' => 'login', 'placeholder' => 'Your login', 'required')); ?>
			</p>
			<p>
				<?php echo Form::email('email', null, array('id' => 'mail', 'placeholder' => 'Your e-mail address', 'required')); ?>
			</p>
			<p>
				<?php echo Form::password('password', array('id' => 'password', 'placeholder' => 'Your password', 'required')); ?>
			</p>
			<p>
				<?php echo Form::password('password_confirmation', array('id' => 'password_confirmation', 'placeholder' => 'Your password', 'required')); ?>
			</p>
			<?php echo Form::button('Register', array('id'=>'reg_button', 'type' => 'submit'));?>
			<?php echo Form::close();?>
		
        <?php if(isset($success)):?>
			<div class="message">		
				<span><?=$success; ?></span></br>
				<a href="login">Login</a>
			</div>
		<?php endif; ?>	

		<?php if (isset($errors)):?>
			<div class="errorsblock">	
				<h1>Errors:</h1>
				<span><?=$errors; ?></span>
			</div>
		<?php endif; ?>	

		</center>
		</div>
        <?php include __DIR__.'/footer.php';?>
	</body>	
</html>

