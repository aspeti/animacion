<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprobante_model extends CI_Model {

    public function getAllComprobante(){ 
        $resultado = $this->db->get("comprobante");
        return $resultado->row(); 
    }

}