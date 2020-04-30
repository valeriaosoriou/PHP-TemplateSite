<!DOCTYPE html>
<html>
<head>
	<?php
	require("templates/meta.php");
	?>
	<title> <?php echo $title; ?> </title>
	<?php
	require("templates/styles.php");
	?>
</head>

<body class="bg-light">
	<div class="container-fluid">
		<header>
			<div class="banner">
				<img src="images/banner.jpg" alt="Coffee Banner" class="coffee-banner"/>
			</div>

		</header>

		<?php
		require("templates/nav.php");

		?>
