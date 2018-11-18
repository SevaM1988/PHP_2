<?php

require 'DigitalProduct.php';
require 'PhisicalProduct.php';
require 'WeightProduct.php';

$DPr = new DigitalProduct('notebook', 2000);
$DPr->profit_count(1);
$DPr->print_price();

$PPr = new PhisicalProduct('notebook', 2000);
$PPr->profit_count(1);
$PPr->print_price();

$WPr = new WeightProduct('apple', 20);
$WPr->profit_count(10);
$WPr->print_price();

