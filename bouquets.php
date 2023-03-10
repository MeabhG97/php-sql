<!doctype html>
<html lang="en">
  <?php
    require_once("database-connect.php");
    include "includes/head.php";

    $queryBouquets = "SELECT * FROM Flower_Arrangements";
    $statment = $db -> prepare($queryBouquets);
    $statment -> execute();
    $bouquets = $statment -> fetchAll();
    $statment -> closeCursor();

    $queryBouquetPrice = "SELECT Arrangement_Flowers.arrangement_id,
      SUM(Flowers.price_per_stem * Arrangement_Flowers.stem_count) as price FROM 
      Arrangement_Flowers
      JOIN Flowers USING (flower_id)
      GROUP BY Arrangement_Flowers.arrangement_id";
    $statment = $db -> prepare($queryBouquetPrice);
    $statment -> execute();
    $bouquetPriceResult = $statment -> fetchAll(PDO::FETCH_ASSOC);
    $statment -> closeCursor();

    $bouquetPrices = [];
    foreach($bouquetPriceResult as $bq){
      $bouquetPrices[$bq["arrangement_id"]] = $bq["price"];
    }
  ?>
  
  <body>
    <?php include "includes/nav.php" ?>
    <main class="container-fluid vh-100 pt-3">
      <div class="starter-template text-center">
        <h2 class="pt-2">Bouqets</h2>

        <div class="table-responsive pt-3">
          <table class="table table-striped table-hover table-borderless">
            <tr>
              <th>Bouquet</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
            <?php
              foreach($bouquets as $bouquet){
                echo 
                  "<tr> 
                    <td>{$bouquet["name"]}</td> 
                    <td>{$bouquet["description"]}</td>
                    <td>{$bouquetPrices["$bouquet[arrangement_id]"]}</td>
                  </tr>";
              }
            ?>
          </table>
        </div>
      </div>
    </main><!-- /.container -->
    <?php include "includes/footer.php" ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
