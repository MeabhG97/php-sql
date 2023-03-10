<!DOCTYPE HTML>
<html>
	<?php include "includes/head.php" ?>

	<body>
		<?php include "includes/nav.php" ?>
		<main>
		<h2>Apologies</h2>
			<div>
				Unfortunately your order could not be placed at this time. Please try again later.
			</div>
		</main>
		<?php include "includes/footer.php" ?>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>

<?php
	header("refresh:5; url=index.php");
?>