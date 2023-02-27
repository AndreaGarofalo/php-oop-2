<?php

include __DIR__ . './../models/Category.php';
include __DIR__ . './../models/ToyProduct.php';
include __DIR__ . './../models/FoodProduct.php';

$dog_category = new Category('Dog', 'fa-solid fa-dog');
$cat_category = new Category('Cat', 'fa-solid fa-cat');

$food = new FoodProduct('Scatoletta', 'cibo in scatola per gatti', 5.50, $cat_category, ['carne', 'additivi'], '2023/11/01');
$toy = new ToyProduct('Osso', 'Osso di gomma per cagnolini', 5.50, $dog_category, ['gomma', 'plastica'], 'rosso');

