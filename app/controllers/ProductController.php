<?php
    namespace App\Controllers;
    use \App\Models\Product;
    //require_once "../Product.php";
    class ProductController {
         function __construct() {
            echo "<br>Constructor clase PRODUCTCONTROLLER";
        }
        function index()
        {
            $products = Product::all();
            require "../views/product.php";
        }
        function show() 
        {
            $id = $_GET["id"];
            $product = Product::find($id);
            require "../views/show.php";
        }
    }