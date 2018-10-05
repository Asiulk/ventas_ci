<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Permisos_model");
	}

  public function index(){
    $data  = array(
      'permisos' => $this->Permisos_model->getPermisos(),
    );
    $this->load->view("layouts/header");
    $this->load->view("layouts/aside");
    $this->load->view("admin/permisos/list",$data);
    $this->load->view("layouts/footer");
  }

}
