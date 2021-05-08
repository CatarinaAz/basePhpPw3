<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Template{
	function pet($view, $data=array()){
		$CI = & get_instance();
		//carrega o conteúdo da header 
		$CI->load->view("template/header", $data);
		//carrega o conteudo da pagina, o main 
		$CI->load->view($view,$data); 
		//carrega o rodapé, o footer
		$CI->load->view("template/footer", $data);
		//carrega os scripts
		$CI->load->view("template/scripts", $data);
	}
}
