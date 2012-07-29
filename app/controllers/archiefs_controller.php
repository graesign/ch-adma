<?php

class ArchiefsController extends AppController
{
	public $name = 'Archiefs';
	//public $helpers = array('Html', 'form');
	
	public function index()
	{
		$this->set('title_for_layout','Archief');
		
	}
	
	public function thanks()
	{	
		$this->set('title_for_layout','Archief');
	}
}

?>

