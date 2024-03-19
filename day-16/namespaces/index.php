<?php

require 'classes/index.php';
require 'models/index.php';

use productsClasses\Products as ProductClassesInstance;
use productsModels\Products as ProductModelInstance;

$product = new ProductClassesInstance();
$otherProduct = new ProductModelInstance();
$product->renderDetails();
echo '<hr/>';
$otherProduct->renderDetails();