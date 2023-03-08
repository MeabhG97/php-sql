<!doctype html>
<html lang="en">
  <?php
    require_once("database-connect.php");
    include "includes/head.php";

    $queryFlowers = "SELECT * FROM Flowers";
    $statment = $db -> prepare($queryFlowers);
    $statment -> execute();
    $flowers = $statment -> fetchAll();
    $statment -> closeCursor();
  ?>
  <body>
    <?php include "includes/nav.php" ?>
    <main class="container">
      <div class="starter-template text-center">
        <h1>Flowers</h1>

        <table>
          <tr>
            <th>Flower</th>
            <th>Colour</th>
            <th>Price per stem</th>
          </tr>
          <?php
            foreach($flowers as $flower){
              echo 
                "<tr> 
                  <td>{$flower["name"]}</td> 
                  <td>{$flower["color"]}</td>
                  <td>{$flower["price_per_stem"]}</td>
                </tr>";
            }
          ?>
        </table>
      </div>
    </main><!-- /.container -->
    <?php include "includes/footer.php" ?>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
