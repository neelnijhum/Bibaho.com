<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
	 
	 
		$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[Password]');
	 
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('inc/Header');
		 $this->load->view('home');
		 $this->load->view('inc/Footer');

		}

		else {


			$idata['Name']=$this->input->post('Name');
			$idata['Email']=$this->input->post('Email');
			$idata['Password']=$this->input->post('Password');
			$idata['Type']='User';
		 
			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Signup Completed</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}



	

		 
		 
	 


}
