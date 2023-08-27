<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function login($email, $password)
    {        
        $this->db->where("email", $email);
        $this->db->where("password", $password);

        $resultados = $this->db->get("usuario"); //tabla
        if($resultados->num_rows() > 0){
            return $resultados->row();
        }else{
            return false;
        }      
    }
}
