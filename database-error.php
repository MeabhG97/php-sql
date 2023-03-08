<!DOCTYPE html>
<html>

<!-- the head section -->
<?php include "includes/head.php" ?>

<!-- the body section -->
<body>
    <?php include "includes/nav.php" ?>
    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>The database must be installed as described in the appendix.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <?php include "includes/footer.php" ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>