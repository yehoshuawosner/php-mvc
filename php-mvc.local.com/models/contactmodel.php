<?php

namespace models;
use lib\Model;

class ContactModel extends Model{

    public function __construct(){

        parent::__construct();

    }

    public function insert($data = array()){

        $sql = "INSERT INTO contacts(fullname, email, mobile ) VALUES (?,?,?)";
        $result = $this->db->query($sql,array(
            $data["fullname"],
            $data["email"],
            $data["mobile"]));
        
        return $result;
        
    }
}

?>