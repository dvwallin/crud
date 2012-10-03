<?php


// 
class Site extends CI_Controller {

	// laddar vår main view.
	function index() {
		
		//form validationen som laddas in atumatiskt i autoload
						/*$this->load->library('form_validation');

						$this->form_validation->set_rules('name', 'name', 'required');
						$this->form_validation->set_rules('lastname', 'Lastname', 'required');
						$this->form_validation->set_rules('email', 'email conformation', 'required');
						$this->form_validation->set_rules('message', 'message', 'required');

						if ($this->form_validation->run() == FALSE)
						{
							$this->load->view('myform');
						}
						else
						{
							$this->load->view('formsuccess');
						}*/
						
// laddar in data från databasen och använder oss av Active records , sedan ladda in sidan main view.
		$data = array();
		
		
		if($query = $this->site_model->get_from_db()){
			$data['records'] = $query;
			
		}
		$this->load->view('main_view', $data);
		
		
		
		
	}
	
	

	
	
	// hämtar data från inputfälten som sedan skickas till databasen
	
	function Create(){
		
		$msg;
		
		//$msg = substr($msg,0,strpos($msg' ',50));
		
		// Samlar in fomulärsdata
		$data = array(
			'name' => $this->input->post('name'),
			'lastname' => $this->input->post('lastname'),
			'title' => $this->input->post('title'),
			'message' => $this->input->post('message')
			);
			
		// Klipper formulärsdata message samt använder oss av text_helper som autoloadas
		$data['message'] = character_limiter($data['message'], 50);
				
		
		
	// Jag har tillgång till site_model eftersom vi autoloader den.
	
	$this->site_model->add_to_db($data);
	$this->index();
	
	
}

// Uppdatering av blog inlägg ( enkel variant då vi kallar på ett specifikt id i site_model)
	function update(){
	/*	$data = array(
			'name' => 'NewName',
			'lastname' => 'NewLname',
			'title' => 'NewTitle',
			'message' => 'NewMessage'
			);
			$this->site_model->update_db($data);*/
			
		
			   $data = array(
		      
		        'name'     => $this->input->post('name'), 
				'lastname'     => $this->input->post('lastname'), 
				'title'     => $this->input->post('title'), 
		       
		        'message'    => $this->input->post('message'),
		      
		 
		    );

		   $this->load->model('site_model');
		   $this->site_model->update_db($data);
		$this->load->view('main_view');
		    }
	
	//Raderar inlägg samt laddar om sidan index.

function delete(){
	$this->site_model->delete_from_db();
	$this->index();
}
}