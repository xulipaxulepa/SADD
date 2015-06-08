<br />
<br />
<?php 
$this->load->view("includes/Header");
$this->load->view("includes/Body");
$this->load->view("includes/Footer");

echo form_fieldset('Cadastro de Alunos');	
echo form_open('Cadastro/create',array('role'=>'form'));
echo validation_errors('<p>','</p>');
if($this->session->flashdata('cadastrook')):

	echo "<p>".$this->session->flashdata('cadastrook')."</p>";
	endif;

echo form_label('Nome Completo')."<br />";
echo form_input(array('id'=>'home','name'=>'nome'),set_value('nome'),'autofocus')."<br />";
echo form_label('Login')."<br />";;
echo form_input(array('name'=>'login'),set_value('login'))."<br />";
echo form_label('Senha')."<br />";;
echo form_password(array('name'=>'senha'),set_value('senha'))."<br />";
echo form_label('Repita a Senha')."<br />";;
echo form_password(array('name'=>'senha2'),set_value('senha2'))."<br/><br/>";
echo form_submit(array('name'=>'cadastrar'),'Cadastrar')."<br/>";
echo form_close();
echo form_fieldset_close();