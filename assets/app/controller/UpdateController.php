<?php 

require('../models/connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$con = new Connection();

$products = $con->UpdateProduct($id, $name, $description, $price);
header("Location: ../index.php");



require('../views/EditV.php');