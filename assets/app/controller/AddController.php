<?php 

require("../models/connection.php");

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$con = new Connection();

$products = $con->InsertProduct($name, $description, $price);

header("Location: ../index.php");