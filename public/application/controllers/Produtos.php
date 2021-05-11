<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	
	public function index()
	{
		$this->template->pet('produtos');
	}
}
