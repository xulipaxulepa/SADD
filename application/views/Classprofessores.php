<br />
<br />
<?php
$this->load->view("includes/Header");
$this->load->view("includes/Body");
$this->load->view("includes/Footer");

echo form_fieldset('Classificação de Professores');	
echo form_open('Classprofessores/update',array('role'=>'form'));
echo validation_errors('<p>','</p>');
if($this->session->flashdata('cadastrook')):

	echo "<p>".$this->session->flashdata('cadastrook')."</p>";
	endif;
echo form_label('Nome Completo')."<br />";
echo form_input(array('id'=>'home','name'=>'nome'),set_value('nome'),'autofocus')."<br />";
echo form_label('Pontualidade')."<br />";
echo "1";
echo form_radio(array('id'=>'home','name'=>'pontualidade','value' => '1','checked' => FALSE),set_value('pontualidade'),'autofocus');
echo "2";
echo form_radio(array('id'=>'home','name'=>'pontualidade','value' => '2','checked' => FALSE),set_value('pontualidade'),'autofocus');
echo "3";
echo form_radio(array('id'=>'home','name'=>'pontualidade','value' => '3','checked' => FALSE),set_value('pontualidade'),'autofocus');
echo "4";
echo form_radio(array('id'=>'home','name'=>'pontualidade','value' => '4','checked' => FALSE),set_value('pontualidade'),'autofocus');
echo "5";
echo form_radio(array('id'=>'home','name'=>'pontualidade','value' => '5','checked' => FALSE),set_value('pontualidade'),'autofocus').'<br /';

echo form_label('Assiduidade')."<br />";
echo "1";
echo form_radio(array('id'=>'home','name'=>'assiduidade','value' => '1','checked' => FALSE),set_value('assiduidade'),'autofocus');
echo "2";
echo form_radio(array('id'=>'home','name'=>'assiduidade','value' => '2','checked' => FALSE),set_value('assiduidade'),'autofocus');
echo "3";
echo form_radio(array('id'=>'home','name'=>'assiduidade','value' => '3','checked' => FALSE),set_value('assiduidade'),'autofocus');
echo "4";
echo form_radio(array('id'=>'home','name'=>'assiduidade','value' => '4','checked' => FALSE),set_value('assiduidade'),'autofocus');
echo "5";
echo form_radio(array('id'=>'home','name'=>'assiduidade','value' => '5','checked' => FALSE),set_value('assiduidade'),'autofocus').'<br /';

echo form_label('Organização')."<br />";
echo "1";
echo form_radio(array('id'=>'home','name'=>'organização','value' => '1','checked' => FALSE),set_value('organização'),'autofocus');
echo "2";
echo form_radio(array('id'=>'home','name'=>'organização','value' => '2','checked' => FALSE),set_value('organização'),'autofocus');
echo "3";
echo form_radio(array('id'=>'home','name'=>'organização','value' => '3','checked' => FALSE),set_value('organização'),'autofocus');
echo "4";
echo form_radio(array('id'=>'home','name'=>'organização','value' => '4','checked' => FALSE),set_value('organização'),'autofocus');
echo "5";
echo form_radio(array('id'=>'home','name'=>'organização','value' => '5','checked' => FALSE),set_value('organização'),'autofocus')."<br />";

echo form_label('Disciplina')."<br />";
echo "1";
echo form_radio(array('id'=>'home','name'=>'disciplina','value' => '1','checked' => FALSE),set_value('disciplina'),'autofocus');
echo "2";
echo form_radio(array('id'=>'home','name'=>'disciplina','value' => '2','checked' => FALSE),set_value('disciplina'),'autofocus');
echo "3";
echo form_radio(array('id'=>'home','name'=>'disciplina','value' => '3','checked' => FALSE),set_value('disciplina'),'autofocus');
echo "4";
echo form_radio(array('id'=>'home','name'=>'disciplina','value' => '4','checked' => FALSE),set_value('disciplina'),'autofocus');
echo "5";
echo form_radio(array('id'=>'home','name'=>'disciplina','value' => '5','checked' => FALSE),set_value('disciplina'),'autofocus')."<br />";

echo form_submit(array('name'=>'atualizar'),'Avaliar')."<br/>";
echo form_close();
echo form_fieldset_close();



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

