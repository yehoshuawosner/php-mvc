<?php 
    namespace controllers;
    use lib\Controller;
    
    class Contact extends Controller{

        function __construct(){
           
            parent::__construct();
            $this->view->message = "";
            
        }

        public function render(){
            $this->view->render('contact/index');
        }

        public function registerContact(){

            $result = $this->model->insert($_POST);
            if($result>0){
                $this->view->message = "Nuevo Contacto Registrando";
            }else{
                $this->view->message = "Error En Registrando";
            }

            $this->render();
        }

    }

?>