<?php 

    namespace lib;
    use lib\Dbh;

    class Model{

        public $db = "";
        
        function __construct(){

            $this->db = Dbh::getInstance();

        }

    }

?>