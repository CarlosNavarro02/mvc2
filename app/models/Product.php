<?php
    namespace App\Models;
    //fichero que simula el modelo con datos
    class Product{
        const PRODUCTS = [
            array(1,'Cortacesped'),
            array(2,'Pizarra'),
            array(3,'Pizarra'),
            array(4,'Pizarra'),
        ];
        function __construct()
        {
            
        }
        public static function all()
        {
            return Product::PRODUCTS;
        }
        public static function find($id)
        {
            return Product::PRODUCTS[$id-1];
        }
    }
   