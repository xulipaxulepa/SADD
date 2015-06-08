<br />
<br />
<br />
<br />
<?php
 

$this->load->view("includes/Header");
$this->load->view("includes/Body");
$this->load->view("includes/Footer");

echo validation_errors('<p class="alert alert-warning">','</p>');
echo form_fieldset('Login');
echo form_open('login',array('role'=>'form'));
echo form_label('Login')."<br>";
echo form_input(array('name'=>'login','class'=>'form-control'))."<br>";
echo form_label('Senha')."<br>";
echo form_password(array('name'=>'senha','class'=>'form-control'))."<br>";
echo form_submit(array('name'=>'cadastrar','class'=>'btn btn-primary'),'Entrar');
echo form_close();



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

