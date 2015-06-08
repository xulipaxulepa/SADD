<br />
<br />
<?php
$this->load->view("includes/Header");
$this->load->view("includes/Body");
$this->load->view("includes/Footer");

echo form_fieldset('Cadastro de Professores');	
echo form_open('Addprofessor/create',array('role'=>'form'));
echo validation_errors('<p>','</p>');
if($this->session->flashdata('cadastrook')):

	echo "<p>".$this->session->flashdata('cadastrook')."</p>";
	endif;

echo form_label('Nome Completo')."<br />";
echo form_input(array('id'=>'home','name'=>'nome'),set_value('nome'),'autofocus')."<br />";
echo form_label('Formação academica')."<br />";
echo form_input(array('id'=>'home','name'=>'formação'),set_value('formação'),'autofocus')."<br />";
echo form_submit(array('name'=>'cadastrar'),'Cadastrar')."<br/>";
echo form_close();
echo form_fieldset_close();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

