<?php 

require('../models/connection.php'); 

$con = new Connection();

$products = $con->Products($_POST['search']);

require('../views/ProductV.php');