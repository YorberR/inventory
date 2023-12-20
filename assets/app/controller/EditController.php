<?php 

require('../models/connection.php'); 

$id = $_GET['id'];

$con = new Connection();

$products = $con->EditProduct($id);

require("../views/EditV.php");
