<?php
    namespace App\Controllers;
    use \App\Models\Product;
use Dompdf\Dompdf;

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
        function pdf()
        {
            $dompdf = new Dompdf();
            $dompdf->loadHtml('<h1>HOla mundo</h1>');
            header("Content-type: application/pdf");
            header("Content-Disposition: inline: filename=documento.pdf");
            $dompdf->render();
            $dompdf->stream();            
        }
        function show() 
        {
            $id = $_GET["id"];
            $product = Product::find($id);
            require "../views/show.php";
        }
    }