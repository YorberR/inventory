<?php 

class Connection{
    private $conect;

    public function __construct(){
        $this->conect = new mysqli("localhost", "root", "", "inventory");
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
        $this->conect->query("UPDATE products SET name = '$name', description = '$description', price = '$price' WHERE id = '$id'");

    }
}