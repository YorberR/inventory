<?php 

class Connection{
    private $conect;

    public function __construct() {
        $db_url = parse_url(getenv('DATABASE_URL'));

        $db_host = $db_url['kil9uzd3tgem3naa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
        $db_name = substr($db_url['uv43fnzgieus75of'], 1);
        $db_user = $db_url['uv43fnzgieus75of'];
        $db_password = $db_url['b5hp471d5mj0l5i7'];

        try {
            $this->conect = new PDO("pgsql:host=$db_host;dbname=$db_name", $db_user, $db_password);
            // Set the PDO error mode to exception
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function getProducts(){
        $petition = $this->conect->query("SELECT * FROM products");
        $data = [];
        $i = 0;

        while($row = $petition->fetch_assoc()){
            $data[$i] = $row;
            $i++;
        }
        return $data;
    }

    public function Products($name){
        $petition = $this->conect->query("SELECT * FROM products WHERE name = '$name'");
        $data = [];
        $i = 0;
        
        while($row = $petition->fetch_assoc()){
            $data[$i] = $row;
            $i++;
        }
        return $data;
    }

    public function EditProduct($id){
        $petition = $this->conect->query("SELECT * FROM products WHERE id = '$id'");
        $data = [];
        $i = 0;
        
        while($row = $petition->fetch_assoc()){
            $data[$i] = $row;
            $i++;
        }
        return $data;
    }

    public function UpdateProduct($id, $name, $description, $price){
        $petition = $this->conect->query("UPDATE products SET name = '$name', description = '$description', price = '$price' WHERE id = '$id'");
    }

    public function InsertProduct($name, $description, $price){
        $petition = $this->conect->query("INSERT INTO products(name, description, price) VALUES('$name', '$description', '$price')");
    }

    public function DeleteProduct($id){
        $petition = $this->conect->query("DELETE FROM products WHERE id = '$id'");
    }
}