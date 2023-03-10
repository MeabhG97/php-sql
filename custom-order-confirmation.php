<!DOCTYPE HTML>
<html>
	<?php include "includes/head.php" ?>

	<body>
		<?php include "includes/nav.php" ?>
		<main>
		<h2>Thank you!</h2>
			<div>
				Thank you for ordering. We will respond as quickly as possible.
			</div>
		</main>
		<?php include "includes/footer.php" ?>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>

<?php
	header("refresh:5; url=index.php");
?>