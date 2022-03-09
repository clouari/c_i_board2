<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public function index() 
	{
		echo "첫 번째 컨트롤러.";
	}

	public function my()
	{
		echo "내 꺼얌";
	}
}
