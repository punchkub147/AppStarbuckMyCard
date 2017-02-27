<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Cards</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	<script language="javascript">
		function fncSubmit()
		{
			alert('Invalid Number');	
		}
	</script>
</head>
<body>
	
	<header>
		<a href="index.php" class="icon-l">back</a> 
		<p>My Cards</p>
		<a href="###" class="icon-r" onClick="JavaScript:return fncSubmit();">done</a>
	</header>

	<div class="content">
		
		<div class="wrap-card">
			<div class="card">
				<img src="img/addcard.png" alt="">
			</div>
			<input type="text" class="addcard-input-1" placeholder="Starbucks Card Number">
			<input type="text" class="addcard-input-2" placeholder="Security Code">
			<div class="con-card">
				
			</div>
		</div>
			
			
			

		

	</div><!-- content -->



	<?php 
		include 'menu.php';
	 ?>

</body>
</html>