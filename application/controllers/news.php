<?php 
	class News extends Front_Controller
	{
		public function __construct() 
		{
			parent::__construct();			
		}
		public function index()		
		{
			Template::set(array('title'=>'Admin'));
			Template::render();
		}
	}
?>