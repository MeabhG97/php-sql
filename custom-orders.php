<!doctype html>
<html lang="en">
  <?php include "includes/head.php"?>
  <body>
    <?php include "includes/nav.php"?>

    <main class="container-fluid pt-3">
      <h2 class="text-center">Custom Order</h2>
      <div class="d-grid col-8 mx-auto">
        
        <form method="POST" name="customOrder" action="custom-order-handler.php" class="was-validated">

          <div class="mb-3">
            <?php 
              if(!empty($_GET["name"])){
                echo "<span>Name must not be blank</span>";
              }
            ?>
            <input type="text" class="form-control vw50" id="customerName" name="name" 
              pattern="^[A-Za-z\s']{2,50}$" required placeholder="Name">
            <span>Must only contain 2-50 letters and whitespace</span>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["email"])){
                echo "<span>Email must not be blank</span>";
              }
              if(!empty($_GET["invalid"])){
                echo "<span>Invalid Email</span>";
              }
            ?>
            <input type="text" class="form-control" id="customerEmail" name="email-add"
              placeholder="Email" required pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}">
            <span>Must be a valid email address</span>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["add1"])){
                echo "<span>Address Line 1 must not be blank</span>";
              }
            ?>
            <input type="text" class="form-control" id="address1" name="address1" 
              pattern="^[\w\s]{2,50}$" required placeholder="Address Line 1"/>
            <span>Must only contain 2-50 letters, numbers and whitespace</span>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["add2"])){
                echo "<span>Address Line 2 must not be blank</span>";
              }
            ?>
            <input type="text" class="form-control" id="address2" name="address2" 
              pattern="^[\w\s]{2,50}$" required placeholder="Address Line 2"/>
            <span>Must only contain 2-50 letters, numbers and whitespace</span>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["town"])){
                echo "<span>Town must not be blank</span>";
              }
            ?>
            <input type="text" class="form-control" id="addressTown" name="address-town" 
              pattern="^[A-Za-z\s']{2,50}$" required placeholder="Town"/>
              <span>Must only contain 2-50 letters and whitespace</span>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["county"])){
                echo "<span>County must not be blank</span>";
              }
            ?>
            <input type="text" class="form-control" id="addressCounty" name="address-county" 
              pattern="^[A-Za-z\s']{2,50}$" required placeholder="County"/>
            <span>Must only contain 2-50 letters and whitespace</span>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["eircode"])){
                echo "<span>Eircode must not be blank</span>";
              }
            ?>
            <input type="text" class="form-control" id="eircode" name="address-eircode"
              pattern="^([AC-FHKNPRTV-Y]\d{2}|D6W)\s?[0-9AC-FHKNPRTV-Y]{4}$" minlength="2"
              placeholder="Eircode" required/>
              <span>Must be a valid Eircode using uppercase letters</span>
          </div>

          <div class="mb-3">
            Delivery:
            <label for="yes" class="form-label">Yes</label>
            <input type="radio" name="delivery" id="yes">
            <label for="no" class="form-label">No</label>
            <input type="radio" name="delivery" id="no" checked/>
          </div>

          <div class="mb-3">
            <label for="date" class="form-label">Date Required By:</label>
            <input type="date" class="form-control" name="date" min="<?php echo date("Y-m-d")?>"
              value="<?php echo date("Y-m-d")?>"/>
          </div>

          <div class="mb-3">
            <?php 
              if(!empty($_GET["order"])){
                echo "<span>Order Details must not be blank</span>";
              }
            ?>
            <textarea class="form-control" id="orderDetails" name="order" 
              minlength="2" maxlength="500" placeholder="Order Details" required></textarea>
            <span>Must contain 2-500 characters</span>
          </div>
          <div class="d-grid col-6 mx-auto mb-3">
            <input type="submit" value="Submit" id="formSubmit" class="btn btn-success btn-lg">
          </div>
        </form>
      </div>
    </main><!-- /.container -->
    <?php include "includes/footer.php"?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
