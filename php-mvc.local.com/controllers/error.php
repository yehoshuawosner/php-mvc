<?php 
    namespace controllers;
    use lib\Controller;

    class Error extends Controller{

        public $error_cause = null;

        function __construct(){
            
            parent:: __construct();
            $this->view->message = "Dinamic Message";
            $this->view->render('error/index');

        }

    }

?>