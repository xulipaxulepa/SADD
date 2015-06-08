<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
	
	
		public function __construct(){
		
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('table');
		$this->load->model('Sadd_model_aluno','sadd_model_aluno');
				
		
		}
	
	public function index(){
			
	// VALIDATION RULES
        
        $this->form_validation->set_rules('login', 'login', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
        
        $query = $this->sadd_model_aluno->validate();

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Login');
        } else {

            if (!$query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'login' => $this->input->post('login'),
                    'senha' => $this->input->post('senha'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('Home');
            } else {
                redirect($this->index());
            }
        }
		
	}
		
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

