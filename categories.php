<?php
require_once 'Connectic.php';
require_once 'ProductClass/Categories.php';

$categories = new Categories();

$allCategories = $categories->selectAllCategories();
