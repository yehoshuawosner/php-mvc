<?php
    
    namespace lib;
   
    class App{

        function __construct(){
            //echo "<p>Nueva App</p>";
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = ltrim($url, '/');
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            $controller_class_name = ( isset($url[0]) && !empty($url[0]) ) ? $url[0] : 'main';
            $controller = CONTROLLERS_NS_PATH . $controller_class_name;
            if(file_exists($controller. '.php')){
                $controller = new $controller;
                $controller->loadModel($controller_class_name);
                if(isset($url[1]) && method_exists($controller,$url[1])){
                    $controller->{$url[1]}();
                }else{
                    $controller->render();
                }
            }else{
                $error = CONTROLLERS_NS_PATH . 'Error';
                $controller = new $error;
            }
        }

    }

?>