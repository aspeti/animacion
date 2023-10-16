<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

    public function __construct(){
        parent::__construct();
		
    }

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/card');
		$this->load->view('layouts/footer');
	}   

	public function reservar()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('reservas/reservar');
		$this->load->view('layouts/footer');
	}   
	 
}
