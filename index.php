<?php
  $departments = array(
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-calais',
    '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 5 : Les tableaux</title>
  </head>
  <body>
    <?php
      foreach($departments as $index => $value){ ?>
      <p><?php echo $index . ' ' . $value; ?></p>
    <?php }; ?>
  </body>
</html>
