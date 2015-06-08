<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class classprofessores extends CI_Controller{
	
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
			
		$dados = $this->sadd_model_professor->get_all(); 
		$this->load->view('Classprofessores',$dados);
		
		
		}
                
        public function update()
{
            
		//validation form
		$this->form_validation->set_rules('pontualidade','PONTUALIDADE','required');
		$this->form_validation->set_rules('assiduidade','ASSIDUIDADE','required');
		$this->form_validation->set_rules('organização','ORGANIZAÇÂO','required');
		$this->form_validation->set_rules('disciplina','DISCIPLINA','required');
		
		if($this->form_validation->run()==TRUE):
			$condição = elements(array('nome'),$this->input->post());
			$dados = elements(array('pontualidade','assiduidade','organização','disciplina'),$this->input->post());
					
			$this->sadd_model_professor->do_update($dados,$condição);
			
		endif;	
		
		$dados = array(
				'titulo' => 'Create &raquo, Create',
				'tela'  => 'create',

		);
		$this->load->view('Classprofessores',$dados);
		
		
    }
    
    public function logoff(){
		$this->session->unset_userdata('logged');
		
		redirect('Home');
		
	}
        
    public function home(){
        $this->load->view('Home');
    }
    
    public function passadados(){
			
		$dados = $this->sadd_model_professor->get_all();
                return $dados;
    }
}        

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

