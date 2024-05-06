<?php

// require_once __DIR__. '/Model/ProductCategory.php';

$db=[
  $foods=[
    new Food('cibo secco', 15, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('cani', 'icona'), 'meat', '300kcal', '20kg'),
    new Food('cibo umido', 20, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('gatti', 'icona'), 'chicken', '200kcal', '10kg'),
    new Food('snack', 8, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('cani', 'icona'), 'chicken', '100kcal', '2kg'),
  ],

  $toys=[
    new Toys('pallina', 2, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('cani', 'icona'), 'poliestere', 'piccolo'),
    new Toys('laser',3, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('gatti', 'icona'), 'plastica', 'piccolo'),
    new Toys('corda', 2.5, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000' , new ProductCategory('cani', 'icona'), 'tessuto intrecciato', 'lunghezza personalizzabile'),
  ]
]

// $db=[

//   new Gatti (5, 'spazzola pelo lungo', 'cuccia rigida', 'lettiera in silicio', 'tiragraffi in cartone'),
//   new Gatti (4,'spazzola per pelo corto', 'cuccia morbida', 'lettiera vegetale', 'tiragraffi moderno'),

//   new Cani (5,'spazzola per pelo lungo', 'cuccia rigida', 'shampoo pelo lungo', 'sacchettini'),
//   new Cani (3,'spazzola per pelo corto', 'cuccia morbida', 'shampoo pelo corto', 'sacchettini bio'),
// ]

?>