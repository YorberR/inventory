<?php 

class Conection{
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
}