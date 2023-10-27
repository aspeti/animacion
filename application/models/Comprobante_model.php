<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comprobante_model extends CI_Model {

    public function getComprobante(){ 
        $resultado = $this->db->get("comprobante");
        return $resultado->row(); 
    }
    
    public function updateComprobante($idComprobante, $data){
        $this->db->where("id_comprobante",$idComprobante);
        $this->db->update("comprobante",$data);
    } 


}