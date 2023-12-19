<?php 

require('models/Connection.php');   

$con = new Connection();

$products = $con->getProducts();

require('views/productsV.php');