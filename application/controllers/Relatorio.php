<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class relatorio extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->model('Sadd_model_aluno', 'sadd_model_aluno');
        $this->load->model('Sadd_model_professor', 'sadd_model_professor');
        $this->sadd_model_aluno->logged();
    }

    public function index() {
        $professores = $this->sadd_model_professor->get_all();
        $dados = array('professores' => $professores);
        $this->load->view('Relatorio', $dados);
        
       
    }

    public function logoff() {
        $this->session->unset_userdata('logged');

        redirect('Home');
    }

    public function home() {
        $this->load->view('Home');
    }
    
    public function passadados(){
			
		$dados = $this->sadd_model_professor->get_all();
                return $dados;
    }
 }   