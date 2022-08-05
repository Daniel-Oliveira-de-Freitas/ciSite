<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('home');
		
		$this->load->view('servicos');
		$this->load->view('sobre');
		$this->load->view('contato');
	}

	public function clientes(){
		$this->load->view('clientes');
	}
}
