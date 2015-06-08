<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sadd_model_professor extends CI_Model{
	
	
	public function do_insert($dados=NULL){
		
		if($dados!=NULL):
		
		$this->db->insert('Professores',$dados);
		$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
		redirect('Addprofessor/create');
		endif;
		
		}
		
	public function do_update($dados=NULL,$condicao=NULL){
		
		if($dados!=NULL && $condicao!=NULL):
		
		$this->db->update('Professores',$dados,$condicao);
		$this->session->set_flashdata('edicaook','Cadastro alterado com sucesso');
		redirect(current_url());
		endif;
		
		}
	public function do_delete($condicao=NULL){
		if($condicao!=NULL){
			
			$this->db->delete('Professores',$condicao);
			$this->session->set_flashdata('excluirok','Registro deletado com sucesso');
			redirect('crud/retrieve');
			
			}
				
		}
	public function get_all(){
		
		return $this->db->get('Professores');
		
				
		}
	public function get_byid($id=NULL){
		if($id!=NULL):
			
			$this->db->where('id',$id);
			$this->db->limit(1);
			return $this->db->get('Professores');
		else:
			return false;
		endif;
				
		}
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

