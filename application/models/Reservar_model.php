<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservar_model extends CI_Model {

  public function getAllreservas(){

    $this->db->select("r.*, u.nombre as cliente");
    $this->db->from("reserva r");
    $this->db->join("usuario u", "u.id_usuario = r.id_usuario");    
    $this->db->where("r.eliminado","0");
    $this->db->group_by("r.id_reserva");
    

    $resultados = $this->db->get("reserva");
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
}