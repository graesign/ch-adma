<?php

class ArchiefController extends AppController
{
	public $name = 'Archief';
	public $helpers = array('Html', 'form');
	
	public function index()
	{
		// if ( $this->request->is('post') )
		// {
		// 	$data = $this->request->data;
		// 	if ( is_array($data['MailingList']['interests'] ))
		// 	{
		// 		$data['MailingList']['interests'] = implode($data['MailingList']['interests']);
		// 	}
		// 	$this->MailingList->save($data);
		// 	$this->redirect(array('action' => 'thanks'));
		// }
		$this->set('title_for_layout','Archief');
	}
	
	public function thanks()
	{	
		$this->set('title_for_layout','Archief');
	}
}

?>

