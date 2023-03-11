<!doctype html>
<html lang="en">
  <?php 
    require_once("database-connect.php");
    include "includes/head.php";
  ?>
  <body>
    <?php include "includes/nav.php" ?>  
    <main class="container-fluid vh-100 pt-5">
      <div class="container-fluid text-center">
        <h1>Floral Fantasia</h1>
        <p class="lead pt-3">
          Flower shop<br/>
          Please select a link from below to see our products.
        </p>

        <div class="row pt-5">
          <div class="col">
            <a href="./flowers.php">
              <img src="./images/flower-rose-svgrepo-com.svg"/>
              <div>flowers</div>
            </a>
          </div>

          <div class="col">
            <a href="./bouquets.php">
              <img src="./images/valentines-bouquet-svgrepo-com.svg"/>
              <div>bouquet</div>
            </a>
          </div>

          <div class="col">
            <a href="./custom-orders.php">
              <img src="./images/florist-svgrepo-com.svg"/>
              <div>custom order</div>
            </a>
          </div>
        </div>
      </div>

    </main><!-- /.container -->
    <?php include "includes/footer.php" ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
