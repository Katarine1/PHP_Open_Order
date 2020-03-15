<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Open orders</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

		<!-- Header -->
		<?php
			require "./scripts/header.php"; // Chama mais de uma vez
		?>

		<!-- Fim Header -->
		<hr/>

		<!-- Content -->

		<section id="content" class="start-row1">

			<!-- Menu -->
			<?php
				require "./scripts/menu.php"; // Chama mais de uma vez
			?>

			<!-- Fim Menu -->

			<!-- Order Form -->
			<aside id="content2" class="start1">
				<section id="title" class="vertical">
					<h3>New Order</h3>										
				</section>				
				<section class="start1 order">
					<section id="links" class="start-row2">
						<form class="start-row2" method="post" action="open.php">
							<input id="title" type="text" name="title" placeholder="Title">
							<input type="text" name="quantity" placeholder="Quantity">
							<input type="submit" id="botao" value="SAVE" />	
						</form>
					</section>							
				</section>
			</aside>

			<!-- Fim Order Form -->
		</section>

		<!-- Fim Content -->
	</body>
</html>