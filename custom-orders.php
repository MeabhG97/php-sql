<!doctype html>
<html lang="en">
  <?php include "includes/head.php"?>

  <body>
    <?php include "includes/nav.php"?>

    <main class="container">
      <div class="starter-template text-center">
        <h1>Custom Order</h1>
        <form method="POST" name="customOrder" action="custom-order-handler.php"> 
          <p>
            <label for='name'>Your Name:</label> <br>
            <input type="text" name="name">
          </p>
          <p>
            <label for='email'>Email Address:</label> <br>
            <input type="text" name="email"> <br>
          </p>
          <p>
            <label for='message'>Message:</label> <br>
            <textarea name="message"></textarea>
          </p>
          <input type="submit" value="Submit"><br>
        </form>

        <script language="JavaScript">
          var frmvalidator  = new Validator("customOrder");
          frmvalidator.addValidation("name","req","Please provide your name"); 
          frmvalidator.addValidation("email","req","Please provide your email"); 
          frmvalidator.addValidation("email","email","Please enter a valid email address"); 
        </script>
      </div>
    </main><!-- /.container -->
    <?php include "includes/footer.php"?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
