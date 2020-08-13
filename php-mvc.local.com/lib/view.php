<?php 

    namespace lib;

    class View{

        function __construct(){

            //echo "Hellow from LIB View";

        }

        public function render($nombre){
            require 'views/' . $nombre . '.php';
        }
    }

?>