<?php

    class HomeController {
         function __construct() {
            echo "<br>Constructor clase HomeController";
        }
        function index()
        {
            require "../app/views/home.php";
            echo "<br> Dentro index de HomeController<br>";
        }
        function home()
        {
            echo "<br>Dentro de home de HomeController<br>";
        }
    }