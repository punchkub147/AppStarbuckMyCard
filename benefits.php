<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Benefits</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body class="body-w">
	
	<header>
		<a href="index.php" class="icon-l"><img src="img/back.png" alt=""></a> 
		<p>My Benefits</p>
	</header>

	<div class="content">
		<div class="redeem">
			<div class="redeem-cup"><img src="img/cup-s.png" alt=""></div>
			<div class="redeem-r">
				<div class="redeem-text">12 Drinks Purchase Until Your Next Free Tall Drink</div>
				<div class="redeem-rod">
					<div class="redeem-rod-1"></div>
				</div>
				<div class="redeem-count">1/12 (Expires In 2017-05-18)</div>
			</div>
			
			<div class="redeem-filter">
				<div class="filter-l">filter by</div>
				<select name="" id="">
					<option value="">Active</option>
					<option value="">Redeemed</option>
					<option value="">Expired</option>
				</select>
			</div>
			<div class="redeem-comment">You are currently eligible to redeem the following reward(s)</div>
		</div>
		
		<div class="line"></div>

		<div class="reward">
			<div class="reward-cup"><img src="img/cup-star.png" alt=""></div>
			<div class="reward-text">You don't have any earned Rewards at the moment.</div>


		</div>

		<div class="line" style="width: 310px;"></div>

		<div class="contact">
			Collect Stars, get more rewards with registered Starbucks Card and earn 1 Star for every THB 100 purchase. <br>
			For a complete information of My Starbucks Rewards, visit <br>
			<a href="www.starbuckscard.in.th/cards/">https://www.starbuckscard.in.th/cards/</a>
		</div>
	</div>



	<?php 
		include 'menu.php';
	 ?>

</body>
</html>