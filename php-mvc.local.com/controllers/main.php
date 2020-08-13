<?php 
    namespace controllers;
    use lib\Controller;
    
    class Main extends Controller{

        function __construct(){
           
            parent::__construct();
            $this->view->message = "Dinamic Message";
            
        }

        public function render(){
            $this->view->render('main/index');
        }

        public function hello(){
            
            echo "<p>Hi from Main - hello method active</p>";
        
        }
    }

?>