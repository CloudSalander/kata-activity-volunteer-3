</html>
	<header>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<script src="https://cdn.tailwindcss.com"></script>
  		<link rel="stylesheet" href="styles.css">
		<title>Brownie deliverer</title>
	</header>
	<body>
		<div class="container flex flex-col flew-wrap items-center my-80">
			<div id="main-title">
				<h1>Activity Deliverer!</h1>
			</div>
			<?php if(hasParameters()) { ?>
			<div id="winner" class="my-20">
				<h1><?php echo $_GET['student']." farà ".$_GET['activity'];?> </h1>
			</div>
			<?php } ?>
			<div id="form" class="my-30">
				<form action="brownie_deliverer.php" method="POST">
					<select id="activity_selector" name="activity">
						<option value="masterclass">Masterclass</option>
						<option value="weekly shortcut">Shortcut</option>
					</select>
					<?php
						$button_msg = "Try again?"; 
						if(!hasParameters()) $button_msg = "Good luck!"; 
					?>
					<input class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit" value="<?= $button_msg ?>">
				</form>
			</div>
		</div>
	</body>
	<footer>
		
	</footer>
</html>
<?php

function hasParameters(): bool {
	return isset($_GET['student']) && isset($_GET['activity']) && $_GET['student'] != "" && $_GET['activity'] != "";
}

?>