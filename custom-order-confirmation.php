<!DOCTYPE HTML>
<html>
	<?php include "includes/head.php" ?>

	<body>
		<?php include "includes/nav.php" ?>
		<main class="container-fluid vh-100 pt-5 text-center">
			<h2>Thank you!</h2>
			<div class="pb-3">
				Thank you for ordering.<br/>
				We will respond as quickly as possible.
			</div>
		</main>
		<?php include "includes/footer.php" ?>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>

<?php
	header("refresh:5; url=index.php");
?>