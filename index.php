<?php

require_once('./Movie.php');
require_once('./Rental.php');
require_once('./Customer.php');
require_once('./Price.php');

$oneHundredDaysOfSummmer = new Movie('100 days of Summer', 0);
$frozenHeart = new Movie('Frozen Heart', 2);
$avatar = new Movie('Avatar', 1);
$missing = new Movie('Missing', 1);
$missing2 = new Movie('Missing 2', 2);

$missing->setPriceCode(0);
$missing2->setPriceCode(1);


$customer = new Customer('Fedor Astafiev');
$customer->addRental(new Rental($avatar, 10));
$customer->addRental(new Rental($frozenHeart, 20));
$customer->addRental(new Rental($missing, 5));
$customer->addRental(new Rental($missing2, 2));
$customer->statement();