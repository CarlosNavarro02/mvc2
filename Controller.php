<?php
    require_once "Product.php";
    class Controller  
    {
        function __construct() {

        }
        public function home() {
            $products = Product::all();
            require "views/home.php";
        }
        //Funcion que:
        // - Mostrar un producto en particular, el id como parametro
        // - Llamar vista de un producto en concreto
        public function show()
        {
            $id = $_GET["id"];
            $product = Product::find($id);
            require "views/show.php";
        }
    }
    