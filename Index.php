<?php



    require_once ('Autoload.php');

    if(isset($_GET['controllers']) && isset($_GET['method']))
    {
        $controller=$_GET['controllers'];
        $method=$_GET['method'];
    }
    else
    {
       $controller="Home";
       $method="Inicio";
    }

    if(class_exists($controllers) && method_exists($controllers,$method))
    {

        $class=new $controllers;
        $class->$method();

    }
    else
    {
        echo "clase no existe o el metodo es incorrecto";
    }
?>
