<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    public function getAllproductos()
    {        
        $this->db->where("eliminado","0");
        $resultados = $this->db->get("producto");
        return $resultados->result();          
    }

    public function save ($data){
        return $this->db->insert("producto",$data);
    }

    public function getProductoById($id)
    {        
        $this->db->where("id_producto", $id);
        $this->db->where("eliminado","0");
        $resultado = $this->db->get("producto");
        return $resultado->row();          
    }
    
    public function update($id, $data)
    {        
        $this->db->where("id_producto", $id);     
        return $this->db->update("producto", $data); 
    }
    

}
