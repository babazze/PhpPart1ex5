<?php
$t = "yes";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex5</title>
  </head>
  <body>
      <p>
        <?php
        if ($t == "yes") {
        echo "Vs avez dis OUI!";
        } else {
        echo "Vous avez dis NON!";
        }
        ?>
      </p>
  </body>
</html>
