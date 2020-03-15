<?php require_once "all.php"; //Chama somente uma vez. ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>All orders</title>
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

			<!-- Orders -->
			<aside id="content2" class="start1">
				<section id="title" class="vertical">
					<h3>All orders</h3>										
				</section>				
				<section class="start2 order">
					<section id="links-imgs" class="start-row3">						<section id="titles" class="start-row2">
							<section class="start-row2 titles-h4">
								<h4>Title</h4>
							</section>
							<section class="start-row2 titles-h4">
								<h4>Quantity</h4>
							</section>	
						</section>
						<!-- Search all saved results -->
						<?php 
							foreach ($orders as $value) {
						?>

						<!-- Count data until it ends --> 
						<!-- It has 2 data (title and quantity) -->

						<?php
							$order_dados = explode(' - ', $value);
							if(count($order_dados) < 2){
								continue;
							}
							//print_r($order_dados);
						?>
							<!-- Select data and print on tags -->

							<section id="titles" class="start-row2">
								<section class="start-row2 title-h4">
									<h4><?= $order_dados[0]; ?></h4>
								</section>
								<section class="start-row2 title-h4">
									<h4 id="title-h4"><?= $order_dados[1]; ?></h4>
								</section>									
							</section>

						<?php } ?>

						</section>
					</section>	
				</section>
			</aside>

			<!-- Fim Orders -->
		</section>

		<!-- Fim Content -->
	</body>
</html>