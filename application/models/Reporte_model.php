<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_model extends CI_Model {

    public function getAllReservas(){          
        $this->db->select("r.*, u.nombre as cliente, p.nombre as paquete");
        $this->db->from("reserva r");
        $this->db->join("usuario u", "u.id_usuario = r.id_cliente");    
        $this->db->join("paquete p", "p.id_paquete = r.id_paquete");       
        $this->db->where("r.eliminado","0");
        $resultados = $this->db->get();
        return $resultados->result(); 
    }


    public function getAllReservasByDate($fecha_inicio,$fecha_fin){
        $this->db->select("r.*, u.nombre as cliente, p.nombre as paquete");
        $this->db->from("reserva r");
        $this->db->join("usuario u", "u.id_usuario = r.id_cliente");    
        $this->db->join("paquete p", "p.id_paquete = r.id_paquete");    
        $this->db->where("r.eliminado","0");
        $this->db->where('r.fecha_evento >=', $fecha_inicio);
        $this->db->where('r.fecha_evento <=', $fecha_fin); 
        //$this->db->group_by("v.id_venta");      

        $resultados = $this->db->get();

        if($resultados->num_rows()>0){
            return $resultados->result();
        }else{
            return false;
        }   
    }

    public function getReservaByID($id){          
        $this->db->select("r.*, u.nombre as cliente, p.nombre as paquete");
        $this->db->from("reserva r");
        $this->db->join("usuario u", "u.id_usuario = r.id_cliente");    
        $this->db->join("paquete p", "p.id_paquete = r.id_paquete");
        $this->db->where("r.id_reserva", $id);
        $resultados = $this->db->get();
        return $resultados->row(); 
    }

    public function getAllDetalleById($id){          
        $this->db->select("p.*");
        $this->db->from("reserva r");
     //   $this->db->join("personalizado p", "p.id_producto = r.id_reserva");   
        $this->db->join("producto p", "p.id_producto = r.id_producto"); 
        $this->db->where("r.id_reserva", $id);
        $resultados = $this->db->get();
        return $resultados->result();
        

    }

}