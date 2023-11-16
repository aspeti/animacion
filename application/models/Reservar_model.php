<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservar_model extends CI_Model {

  public function getAllreservas(){

    $this->db->select("r.*, u.nombre as cliente");
    $this->db->from("reserva r");
    $this->db->join("usuario u", "u.id_usuario = r.id_usuario");    
    $this->db->where("r.eliminado","0");  
    $this->db->order_by("r.id_reserva", "desc");  

    $resultados = $this->db->get();
    return $resultados->result();
  }



  public function getAllreservasforFecha($FechaInicial,$FechaFinal){

    $this->db->select("r.*, u.nombre as cliente");
    $this->db->from("reserva r");
    $this->db->join("usuario u", "u.id_usuario = r.id_usuario");    
    $this->db->where("r.eliminado","0");
    $this->db->where('r.fecha_creacion >=', $FechaInicial);
    $this->db->where('r.fecha_creacion <=', $FechaFinal); 
    $this->db->group_by("r.id_reserva");
    

    $resultados = $this->db->get("reserva");
    return $resultados->result();
  }

    public function lastId(){
    return $this->db->insert_id();
    }



   public function save($data){
        return $this->db->insert("reserva",$data);
   }

   public function update($id, $data)
   {        
       $this->db->where("id_reserva", $id);     
       return $this->db->update("reserva",$data);
   }

   public function getReservasByClient($userid){

    $this->db->select("r.*, u.nombre as cliente");
    $this->db->from("reserva r");
    $this->db->join("usuario u", "u.id_usuario = r.id_usuario");   
    $this->db->where("r.id_cliente",$userid);   
    $this->db->order_by("r.id_reserva", "desc");  
    $resultados = $this->db->get();
    return $resultados->result();
  }


   public function save_personalizado($data){ 
        return $this->db->insert("personalizado",$data);   
   }



}