<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sadd_model_aluno extends CI_Model{
	
	
	public function do_insert($dados=NULL){
		
		if($dados!=NULL):
		
		$this->db->insert('Alunos',$dados);
		$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
		redirect('Cadastro/create');
		endif;
		
		}
		
	public function do_delete($condicao=NULL){
		if($condicao!=NULL){
			
			$this->db->delete('Alunos',$condicao);
			$this->session->set_flashdata('excluirok','Registro deletado com sucesso');
			redirect('crud/retrieve');
			
			}
				
		}
	
        public function get_all(){
		
		return $this->db->get('Alunos');
		
				
		}
	public function get_byid($id=NULL){
		if($id!=NULL):
			
			$this->db->where('id',$id);
			$this->db->limit(1);
			return $this->db->get('Alunos');
		else:
			return false;
		endif;
				
		}
	# VALIDA USUÁRIO
    public function validate() {
        $this->db->where('login', $this->input->post('login')); 
        $this->db->where('senha', $this->input->post('senha'));
        

        $query = $this->db->get('Alunos'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    public function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina. <a href="http://localhost/SADD/Login">Efetuar Login</a>';
            die();
        }
		else {
			echo "Seja bem vindo ".$this->session->userdata('login')."<br>";
			echo "<a href='crud/logoff'>Sair</a>";
		}
    }
	
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

