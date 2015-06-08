<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadastro extends CI_Controller{
	
	public function __construct(){
		
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('table');
		$this->load->model('Sadd_model_aluno','sadd_model_aluno');
		$this->sadd_model_aluno->logged();
				
		
		}
	
	public function index(){
			
		$dados = array(
				'titulo' => 'Cadastro de usuários',
				'tela'  => '',

		);
		$this->load->view('Cadastro',$dados);
		
		
		}
		
	public function create()
{
		//validation form
		$this->form_validation->set_rules('nome','NOME','trim|required|max_length[50]|ucwords');
		$this->form_validation->set_message('is_unique','Este %s já está cadastrado no sistema');
		$this->form_validation->set_rules('login','LOGIN','trim|required|max_length[25]|strtolower|is_unique[Alunos.login]');
		$this->form_validation->set_rules('senha','SENHA','trim|required|strtolower');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s');
		$this->form_validation->set_rules('senha2','REPITA A SENHA','trim|required|strtolower|matches[senha]');
		
		if($this->form_validation->run()==TRUE):
			
			$dados = elements(array('nome','login','senha'),$this->input->post());
			$dados['senha'] = md5($dados['senha']);//criptografia da senha
			
			$this->sadd_model_aluno->do_insert($dados);
			
		endif;	
		
		$dados = array(
				'titulo' => 'Create &raquo, Create',
				'tela'  => 'create',

		);
		$this->load->view('Cadastro',$dados);
		
		
    }
    
    public function logoff(){
		$this->session->unset_userdata('logged');
		
		redirect('Home');
		
	}
        
    public function home(){
        $this->load->view('Home');
    }
}
