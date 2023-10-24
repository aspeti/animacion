<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalle_paquete_model extends CI_Model {

    public function getAllDetallesById($id)
    {      
        $this->db->select("d.*, p.nombre as nombre,p.descripcion as descripcion");
        $this->db->from("detalle_paquete d");
        $this->db->join("producto p", "p.id_producto = d.id_producto");    
        $this->db->where("d.id_paquete",$id);
        $resultados = $this->db->get();
        return $resultados->result(); 
    }
}