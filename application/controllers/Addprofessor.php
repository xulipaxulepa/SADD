<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addprofessor extends CI_Controller{
	
	public function __construct(){
		
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('table');
		$this->load->model('Sadd_model_aluno','sadd_model_aluno');
                $this->load->model('Sadd_model_professor','sadd_model_professor');
		$this->sadd_model_aluno->logged();
				
		
		}
	
	public function index(){
			
		$dados = array(
				'titulo' => 'Cadastro de professores',
				'tela'  => '',

		);
		$this->load->view('Addprofessor',$dados);
		
		
		}
		
	public function create()
{
		//validation form
		$this->form_validation->set_rules('nome','NOME','trim|required|max_length[50]|ucwords');
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema');
		$this->form_validation->set_rules('formação','FORMAÇÂO','trim|required|max_length[100]|ucwords');
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema');
		
		if($this->form_validation->run()==TRUE):
			
			$dados = elements(array('nome','formação'),$this->input->post());
					
			$this->sadd_model_professor->do_insert($dados);
			
		endif;	
		
		$dados = array(
				'titulo' => 'Create &raquo, Create',
				'tela'  => 'create',

		);
		$this->load->view('Addprofessor',$dados);
		
		
    }
    
    public function logoff(){
		$this->session->unset_userdata('logged');
		
		redirect('Home');
		
	}
        
    public function home(){
        $this->load->view('Home');
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

