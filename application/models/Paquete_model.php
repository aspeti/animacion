<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paquete_model extends CI_Model {

    public function getAllPaquetes()
    {        
        $this->db->where("eliminado","0");
        $resultados = $this->db->get("paquete");
        return $resultados->result();          
    }

    public function save ($data){
        return $this->db->insert("paquete",$data);
    }

    public function getPaqueteById($id)
    {        
        $this->db->where("id_paquete", $id);
        $this->db->where("eliminado","0");
        $resultado = $this->db->get("paquete");
        return $resultado->row();          
    }
    
    public function update($id, $data)
    {        
        $this->db->where("id_paquete", $id);     
        return $this->db->update("paquete", $data); 
    }

    public function getlastId(){
        return $this->db->insert_id();
    }

    public function save_detalle($data){
        $this->db->insert('detalle_paquete',$data);
    }
    

}
