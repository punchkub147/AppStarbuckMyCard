<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Cards</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	
	<header>
		<p>My Cards</p>
	</header>

	<div class="content">
		<div class="advertising">
				<div class="ads-l">
					<div class="ads-l-1">
						<div class="ads-l-1-l">
							<h1># Green level</h1>
							<h2>STARS YOU'VE EARNED</h2>
						</div>
						<div class="level">101</div>
					</div>
					
					<p>Your membership expiry date is 2017-03-29,<br>49 more Stars to reach Gold level</p>
				</div>
				<div class="ads-r">
					<a href="benefits.php"><button>Rewards</button></a>
				</div>
			
		</div>
		
			<div class="wrap-card">
				<div class="card"><a href="mycards.php"><img src="img/card-trans.png" alt=""></a></div>
				<div class="card-circle"><a href="###"><img src="img/pay-circle.png" alt=""></a></div>
			</div>
			

			<div class="con-card">
				
				<div class="card-detail">
					<div class="card-detail-l">
						<div class="card-money">Bath 205.00</div>
						<div class="card-datetime">As of 2560-02-22 19:43</div>
					</div>
					<div class="card-detail-r">
						<div class="card-registered">Registered<br>6080152441596222</div>
					</div>
				</div>
			</div>
			
			<div class="card-btn">
				<a href="transaction.php"><button>Manage</button></a>
				<a href="addcard.php"><button>Add a Card</button></a>
			</div>
			

		

	</div>



	<?php 
		include 'menu.php';
	 ?>

</body>
</html>