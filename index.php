<?php
// require_once __DIR__. '/Model/Shop.php';
// require_once __DIR__. '/Model/Gatti.php';
// require_once __DIR__. '/Model/Cani.php';

require_once __DIR__. '/Model/Products.php';
require_once __DIR__. '/Model/Food.php';
require_once __DIR__. '/Model/Toys.php';
require_once __DIR__. '/data/db.php';


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

<?php foreach($foods as $food): ?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $food->categories->name?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php endforeach; ?>

<!-- toys -->
<h3>TOYS</h3>

  </body>
  </html>