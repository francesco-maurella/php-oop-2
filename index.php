<?php

require_once 'classes.php';

//Alimentari
$food_001 = new Food (111, 'Pasta', 'Barilla', 1);
$food_001->setProp(500, '31/12/2025');

$food_002 = new Food (112, 'Salamini', 'Beretta', 1);
$food_002->setProp(150, '31/12/2025');

$food_003 = new Food (113, 'Wafers', 'Loacker', 2);
$food_003->setProp(80, '31/12/2025');

//Tecnologìa
$tech_004 = new Tech (114, 'Redmi 5 Plus', 'Xiaomi', 99);
$tech_004->setProp('smartphone', 2018);

$tech_005 = new Tech (115, 'Sony OLED 55"', 'Sony', 2599);
$tech_005->setProp('tv', 2020);

$tech_006 = new Tech (116, 'Sound Xp9', 'Bose', 129);
$tech_006->setProp('soundbar', 2020);

//Abbigliamento
$dress_007 = new Dress (117, 'Hogan Shoes', 'Hogan', 79);
$dress_007->setProp('leather', '44');

$dress_008 = new Dress (118, 'Camicia nera', 'Camiceria italiana', 29);
$dress_008->setProp('cotton', 'XL');

$dress_009 = new Dress (119, 'Occhiali da sole aviator', 'Rayban', 89);
$dress_009->setProp('plastic', 'M');

//Venditore
$seller_001 = new Seller (428, 'Bill Amazon', 'amzon2021');
$seller_001->setProp(25621516);
$seller_001->addProduct($food_001);
$seller_001->addProduct($food_002);
$seller_001->addProduct($food_003);
$seller_001->addProduct($tech_004);
$seller_001->addProduct($tech_005);
$seller_001->addProduct($tech_006);
$seller_001->addProduct($dress_007);
$seller_001->addProduct($dress_008);
$seller_001->addProduct($dress_009);

//Carta di credito
$ccard_001 = new Card ('26526262323023');

//Compratore
$buyer_001 = new Buyer (6785, 'Steve Ebay', 'ebay2021');
$buyer_001->setProp('Via Aldo Moro 55');
$buyer_001->addCard($ccard_001);

//Transazione
$transition_001 = new Transition ($buyer_001, $seller_001, 428898);
$transition_001->addProduct($food_002);
$transition_001->addProduct($tech_005);

echo '<pre>' . var_export($transition_001, true) . '</pre>';
