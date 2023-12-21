<?php 

require("../models/connection.php");

$id = $_GET['id'];

$con = new Connection();

$products = $con->DeleteProduct($id);

header("Location: ../index.php");