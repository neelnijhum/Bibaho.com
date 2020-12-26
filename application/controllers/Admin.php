<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 function __construct() {

        parent::__construct();

		date_default_timezone_set('Asia/Dhaka');
		
        if($this->session->userdata('Type')!='Admin'){
			redirect('Welcome');
		}else{
		
		}


    }

    
	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}

	public function add_user()
	{

		$data['title']='Add User';


		$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[tbl_user.email]');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[Password]');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Date_of_Birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('Height', 'Height', 'required');
		$this->form_validation->set_rules('NID', 'NID', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Status', 'Status', 'required');
		$this->form_validation->set_rules('Type', 'Type', 'required');
		$this->form_validation->set_rules('Religion', 'Religion', 'required');
		$this->form_validation->set_rules('Place_id', 'Place', 'required');
		$this->form_validation->set_rules('Contact_Number', 'Contact', 'required');
		$this->form_validation->set_rules('Earning_Status', 'Earning Status', 'required');
		$this->form_validation->set_rules('Educational_Qualification', 'Educational Qualification', 'required');


		$this->form_validation->set_message('validate_age', 'Your age is not allowed');
 

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}
		

 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-user',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['Name']=$this->input->post('Name');
			$idata['Email']=$this->input->post('Email');
			$idata['Password']=$this->input->post('Password');
			$idata['Address']=$this->input->post('Address');
			$idata['Date_of_Birth']=$this->input->post('Date_of_Birth');
			$idata['Height']=$this->input->post('Height');
			$idata['NID']=$this->input->post('NID');
			$idata['Gender']=$this->input->post('Gender');
			$idata['Status']=$this->input->post('Status');
			$idata['Type']=$this->input->post('Type');
			$idata['Religion']=$this->input->post('Religion');
			$idata['Place_id']=$this->input->post('Place_id');
			$idata['Contact_Number']=$this->input->post('Contact_Number');
			$idata['Earning_Status']=$this->input->post('Earning_Status');
			$idata['Educational_Qualification']=$this->input->post('Educational_Qualification');


			/////////////////////////---- FILE ADDING CODE -----////////////////////////////
				if(!empty($_FILES) && ($_FILES['Picture']['name'])){

				$config['upload_path'] = 'image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('Picture')) {
				 $this->session->set_flashdata('message', $this->upload->display_errors());

				redirect('Admin/add-user');
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;
				}

				}else{

				$message='<div class="alert alert-danger">Please Add Your Image</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Admin/add-user');

				}

		/////////////////////////---- FILE ADDING CODE -----////////////////////////////
		 
		

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_user()
	{

		$data['title']='View User';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
	public function edit_user($id)
	{

		$data['title']='Edit User';


		$this->form_validation->set_rules('Name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[Password]');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Date_of_Birth', 'Date of Birth', 'required');
		$this->form_validation->set_rules('Height', 'Height', 'required');
		$this->form_validation->set_rules('NID', 'NID', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Status', 'Status', 'required');
		$this->form_validation->set_rules('Type', 'Type', 'required');
		$this->form_validation->set_rules('Religion', 'Religion', 'required');
		$this->form_validation->set_rules('Place_id', 'Place', 'required');
		$this->form_validation->set_rules('Contact_Number', 'Contact', 'required');
		$this->form_validation->set_rules('Earning_Status', 'Earning Status', 'required');
		$this->form_validation->set_rules('Educational_Qualification', 'Educational Qualification', 'required');


 

 
		$this->form_validation->set_message('validate_age', 'Your age is not allowed');
 

		function validate_age($var){

			if($var>18&&$var<60){

					return true;

			    }else{

			    	return false;
			    }


		}


 
		

 
 
		if ($this->form_validation->run() == FALSE) {


		$data['user']=$this->db->where('ID',$id)->get('tbl_user')->result_array();


		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-user',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['Name']=$this->input->post('Name');
			$idata['Email']=$this->input->post('Email');
			$idata['Password']=$this->input->post('Password');
			$idata['Address']=$this->input->post('Address');
			$idata['Date_of_Birth']=$this->input->post('Date_of_Birth');
			$idata['Height']=$this->input->post('Height');
			$idata['NID']=$this->input->post('NID');
			$idata['Gender']=$this->input->post('Gender');
			$idata['Status']=$this->input->post('Status');
			$idata['Type']=$this->input->post('Type');
			$idata['Religion']=$this->input->post('Religion');
			$idata['Place_id']=$this->input->post('Place_id');
			$idata['Contact_Number']=$this->input->post('Contact_Number');
			$idata['Earning_Status']=$this->input->post('Earning_Status');
			$idata['Educational_Qualification']=$this->input->post('Educational_Qualification');


			/////////////////////////---- FILE ADDING CODE -----////////////////////////////
				if(!empty($_FILES) && ($_FILES['Picture']['name'])){

				$config['upload_path'] = 'image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('Picture')) {
				 $this->session->set_flashdata('message', $this->upload->display_errors());

				redirect('Admin/edit-user/'.$id);
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;
				}

				} 

		/////////////////////////---- FILE ADDING CODE -----////////////////////////////
		 
		

			$this->db->where('ID',$id);
			$this->db->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	
	
	public function delete_user($id)
	{


		$old_image=$this->db->where('ID',$id)->get('tbl_user')->result_array();

		if(!empty($old_image[0]['Picture'])){

		unlink('image/'.$old_image[0]['Picture'].'');
		}

			  
		$this->db->where('ID',$id)->delete('tbl_user');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}

	public function add_place()
	{

		$data['title']='Add place';


		$this->form_validation->set_rules('Place_name', 'Place Name', 'required');
		
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-place',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['Place_name']=$this->input->post('Place_name');
			
		

			$this->db->insert('tbl_place',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_place()
	{

		$data['title']='View place';

	
		
		$data['place']=$this->db->get('tbl_place')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-place',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_place($id)
	{

		$data['title']='Edit place';


		
		$this->form_validation->set_rules('Place_name', 'Place Name', 'required');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['place']=$this->db->where('Place_id',$id)->get('tbl_place')->result_array();


			$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-place',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['Place_name']=$this->input->post('Place_name');
			

			



			$this->db->where('Place_id',$id)->update('tbl_place',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_place($id)
	{


			  
		$this->db->where('Place_id',$id)->delete('tbl_place');
		
		redirect($_SERVER['HTTP_REFERER']);
	
	}




		public function add_gallery()
	{

		$data['title']='Add gallery';


		
		$this->form_validation->set_rules('user_id', 'User Id','required');
		
	
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-gallery',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			
			$idata['user_id']=$this->input->post('user_id');
			
		
               if(!empty($_FILES) && ($_FILES['Picture']['name'])){




				$config['upload_path'] = 'image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('Picture')) {
				 $this->session->set_flashdata('message', $this->upload->display_errors());

				redirect('Admin/add-gallery');
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;
				}

				}else{

				$message='<div class="alert alert-danger">Please Add Your Image</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Admin/add-gallery');

				}


	$this->db->insert('tbl_gallery',$idata);
				$message='<div class="alert alert-success">Image Added</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Admin/add-gallery');

				}




		}


	public function view_gallery()
	{

		$data['title']='View gallery';

	
		
		$data['gallery']=$this->db->get('tbl_gallery')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-gallery',$data);
		$this->load->view('admin/inc/footer');

	}

	
	
		public function edit_gallery($id)
	{

		$data['title']='Edit Gallery';


		
		
		$this->form_validation->set_rules('Picture', 'Picture','required');
		$this->form_validation->set_rules('user_id', 'User Id','required');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['blood']=$this->db->where('g_id',$id)->get('tbl_gallery')->result_array();


			$this->load->view('admin/inc/header');
			$this->load->view('admin/edit-gallery',$data);
			$this->load->view('admin/inc/footer');


		} else {


			$idata['Picture']=$this->input->post('Picture');
			$idata['user_id']=$this->input->post('user_id');

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////
				if(!empty($_FILES) && ($_FILES['Picture']['name'])){

				$config['upload_path'] = 'image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('Picture')) {
				 $this->session->set_flashdata('message', $this->upload->display_errors());

				redirect('Admin/edit-user/'.$id);
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;
				}

				} 

		/////////////////////////---- FILE ADDING CODE -----////////////////////////////
			

			



			$this->db->where('g_id',$id)->update('tbl_gallery',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	
	
	public function delete_gallery($id)
	{


			  
		$this->db->where('g_id',$id)->delete('tbl_gallery');
		
		redirect($_SERVER['HTTP_REFERER']);
		

	
	}


	
		public function add_request()
	{

		$data['title']='Add request';


		$this->form_validation->set_rules('Sender_id', 'Sender Id','required');
		$this->form_validation->set_rules('Receiver_id', 'Receiver Id','required');
		$this->form_validation->set_rules('Accept', 'Accept','required');
		
	
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-request',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['Sender_id']=$this->input->post('Sender_id');
			$idata['Receiver_id']=$this->input->post('Receiver_id');
			$idata['Accept']=$this->input->post('Accept');
			
		

			$this->db->insert('table_request',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function view_request()
	{

		$data['title']='View request';

	
		
		$data['request']=$this->db->get('table_request')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-request',$data);
		$this->load->view('admin/inc/footer');

	}



		public function edit_request($id)
	{

		$data['title']='Edit Request';


		
		$this->form_validation->set_rules('Sender_id', 'Sender Id', 'required');
		$this->form_validation->set_rules('Receiver_id', 'Receiver Id', 'required');
		$this->form_validation->set_rules('Accept', 'Accept', 'required');
		
		
	



		if ($this->form_validation->run() == FALSE) {
			
			
			$data['request']=$this->db->where('Request_id',$id)->get('table_request')->result_array();


			$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-request',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['Sender_id']=$this->input->post('Sender_id');
			$idata['Request_id']=$this->input->post('Request_id');
			$idata['Accept']=$this->input->post('Accept');
			

			



			$this->db->where('Request_id',$id)->update('table_request',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}
	

	public function delete_request($id)
	{


			  
		$this->db->where('Request_id',$id)->delete('table_request');
		
		redirect($_SERVER['HTTP_REFERER']);
		

	
	}
}

