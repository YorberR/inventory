<?php 

require('models/connection.php');   

$con = new Connection();

$products = $con->getProducts();

require('views/productsV.php');