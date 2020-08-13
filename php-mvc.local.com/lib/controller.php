<?php 

    namespace lib;

    class Controller{

        function __construct(){
            $this->view = new View;
        }

        public function loadModel($model){
            $modelName = MODELS_NS_PATH . $model . 'model';
            if(file_exists($modelName. '.php')){
                $this->model = new $modelName;
            }
        }

    }

?>