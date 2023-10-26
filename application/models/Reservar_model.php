<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservar_model extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->model('Paquete_model');
		$this->load->model('Cliente_model');
		$this->load->model('Producto_model');

    }
}