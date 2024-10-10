<?php 

class Connection{
    private $conect;

    public function __construct() {
        $url = getenv('JAWSDB_URL');
        $db = parse_url($url);

        $this->conect = new mysqli($db['Host'], $db['Username'], $db['Password'], substr($db['path'], 1));
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