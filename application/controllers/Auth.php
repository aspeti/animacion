<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Usuario_model');
    }

	public function index()
	{
        if($this->session->userdata("login")){
            redirect(base_url()."dashboard");
        }else{
            $this->load->view("admin/login3");
        }      
        	
	}

    public function login(){
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $res = $this->Usuario_model->login($email , MD5($password));

        if(!$res){
            $this->session->set_flashdata("error", "usuario y/o contraseña incorrecto");
            redirect(base_url());

        }else{

            $data = array(
                'id_usuario'=> $res->id_usuario,
                'nombre' => $res->nombre.' '.$res->apellido,                
                'email'=> $res->email,
                'rol'=>$res->id_rol,
                'login'=>TRUE 

            );

            $this->session->set_userdata($data);
            redirect(base_url()."dashboard");
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
