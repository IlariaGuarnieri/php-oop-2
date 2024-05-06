<?php
// require_once __DIR__. '/Model/Shop.php';
// require_once __DIR__. '/Model/Gatti.php';
// require_once __DIR__. '/Model/Cani.php';

require_once __DIR__. '/Model/Products.php';
require_once __DIR__. '/Model/Food.php';
require_once __DIR__. '/Model/Toys.php';
require_once __DIR__. '/data/db.php';
require_once __DIR__. '/Model/Availability.php';

$food2 = new Food('ci', 15, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('cani', 'icona'), 'meat', '300kcal', '20kg');
$food2-> availability = 'yes';
var_dump($food2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- fontawesome -->

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css' integrity='sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==' crossorigin='anonymous'/>

<!-- css -->

  <link rel="stylesheet" href="./Style/style.css">

  <title>SHOP ONLINE</title>
  </head>
  <body>
    <h1>shop</h1>

<!-- food -->
<h3>FOODS</h3>
<div class="d-flex my-3 p-3">

  <?php foreach($foods as $food): ?>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo $food->immagine?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h2><?php echo $food->name?></h2>
      <h5 class="card-title">CATEGORIA:<?php echo $food->categories->name?></h5>
      <p>&euro; <?php echo $food->prezzo?></p>
      <p class="card-text"> ingredienti:<?php echo $food->ingredients ?></p>
      <P>available:<?php echo $food2-> availability ?></P>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<!-- toys -->
<h3>TOYS</h3>
<div class="d-flex my-3 p-3">

  <?php foreach($toys as $toy): ?>
  <div class="card" style="width: 18rem;">
    <img src="<?php echo $toy->immagine?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h2><?php echo $toy->name?></h2>
      <h5 class="card-title">CATEGORIA:<?php echo $toy->categories->name?></h5>
      <p>&euro; <?php echo $toy->prezzo?></p>
      <P>available:<?php echo $food2-> availability ?></P>
    </div>
  </div>
  <?php endforeach; ?>
</div>

  </body>
  </html>