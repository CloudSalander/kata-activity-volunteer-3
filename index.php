</html>
	<header>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<script src="https://cdn.tailwindcss.com"></script>
  		<link rel="stylesheet" href="styles.css">
		<title>Brownie deliverer</title>
	</header>
	<body>
		<div class="container flex flex-col">
			<div id="main-title">
				<h1>Activity Deliverer!</h1>
			</div>
			<div id="winner">
				<?php if(isset($_GET['student']) && isset($_GET['activity']) ) { ?>
				<h1><?php echo $_GET['student']." farà ".$_GET['activity'];?> </h1>
				<?php } ?>
			</div>
			<div id="form">
				<form action="brownie_deliverer.php" method="POST">
					<select id="activity_selector" name="activity">
						<option value="masterclass">Masterclass</option>
						<option value="weekly shortcut">Shortcut</option>
					</select>
					<input class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit" value="Good luck!">
				</form>
			</div>
		</div>
	</body>
	<footer>
		
	</footer>
</html>