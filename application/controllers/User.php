<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 function __construct() {

        parent::__construct();

		date_default_timezone_set('Asia/Dhaka');
		
        if($this->session->userdata('Type')!='User'){
			redirect('Welcome');
		}else{
		
		}


    }

    
	public function index()
	{
		$this->load->view('user/inc/header');
		$this->load->view('user/dashboard');
		$this->load->view('user/inc/footer');
	}

	


	public function view_user()
	{

		$data['title']='View User';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->get('tbl_user')->result_array();

		$this->load->view('user/inc/header');
		$this->load->view('user/view-user',$data);
		$this->load->view('user/inc/footer');

	}



	public function view_detail($ID)
	{

		$data['title']='View User';

	
		// $data['user']=$this->db->like('blood_group', 'O','both')->get('tbl_user')->result_array();
		$data['user']=$this->db->where('ID',$ID)->get('tbl_user')->result_array();

		$this->load->view('user/inc/header');
		$this->load->view('user/view-detail',$data);
		$this->load->view('user/inc/footer');

	}

	
	
	
	
	
	

	

	

	
	
		
	
	



		public function add_gallery()
	{

		$data['title']='Add gallery';


		
		
	 
		$this->load->view('user/inc/header');
		$this->load->view('user/add-gallery',$data);
		$this->load->view('user/inc/footer');

	 
 


			
			$idata['user_id']=$this->session->userdata('ID');

			if($this->input->post('submit')){


			
		
               if(!empty($_FILES) && ($_FILES['Picture']['name'])){




				$config['upload_path'] = 'image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('Picture')) {
				 $this->session->set_flashdata('message', $this->upload->display_errors());

				redirect('user/add-gallery');
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;

				$this->db->insert('tbl_gallery',$idata);
				$message='<div class="alert alert-success">Image Added</div>';

				$this->session->set_flashdata('message',$message);

				redirect('user/add-gallery');


				}

				}else{

				$message='<div class="alert alert-danger">Please Add Your Image</div>';

				$this->session->set_flashdata('message',$message);

				redirect('user/add-gallery');

				}


				

				} 




		}


	public function view_gallery()
	{

		$data['title']='View gallery';

	
		
		$data['gallery']=$this->db->where('User_id',$this->session->userdata('ID'))->get('tbl_gallery')->result_array();

		$this->load->view('user/inc/header');
		$this->load->view('user/view-gallery',$data);
		$this->load->view('user/inc/footer');

	}

	
	
		
		public function edit_gallery($id)
	{

		$data['title']='Edit gallery';


		
		
	 
		$this->load->view('user/inc/header');
		$this->load->view('user/add-gallery',$data);
		$this->load->view('user/inc/footer');

	 
 


			
			$idata['user_id']=$this->session->userdata('ID');

			if($this->input->post('submit')){

				
			
		
               if(!empty($_FILES) && ($_FILES['Picture']['name'])){




				$config['upload_path'] = 'image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('Picture')) {
				 $this->session->set_flashdata('message', $this->upload->display_errors());

				redirect('user/edit-gallery/'.$id);
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;

				$this->db->where('g_id',$id)->update('tbl_gallery',$idata);
				$message='<div class="alert alert-success">Image Added</div>';

				$this->session->set_flashdata('message',$message);

				redirect('user/edit-gallery/'.$id);


				}

				} 


				

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

		$this->load->view('user/inc/header');
		$this->load->view('user/add-request',$data);
		$this->load->view('user/inc/footer');

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

	
		
		$data['request']=$this->db->from('table_request,tbl_user')->where('Accept',0)->where('table_request.Sender_id=tbl_user.ID')->where('table_request.Receiver_id',$this->session->userdata('ID'))->get()->result_array();

		$this->load->view('user/inc/header');
		$this->load->view('user/view-request',$data);
		$this->load->view('user/inc/footer');

	}


	public function my_accepted()
	{

		$data['title']='My request';

	
		
		$data['request']=$this->db->from('table_request,tbl_user')->where('Accept',1)->where('table_request.Sender_id=tbl_user.ID')->where('table_request.Receiver_id',$this->session->userdata('ID'))->get()->result_array();

		$this->load->view('user/inc/header');
		$this->load->view('user/view-request',$data);
		$this->load->view('user/inc/footer');

	}

	public function view_accepted()
	{

		$data['title']='View request';

	
		
		$data['request']=$this->db->from('table_request,tbl_user')->where('Accept',1)->where('table_request.Receiver_id=tbl_user.ID')->where('table_request.Sender_id',$this->session->userdata('ID'))->get()->result_array();

		$this->load->view('user/inc/header');
		$this->load->view('user/view-accepted',$data);
		$this->load->view('user/inc/footer');

	}


 
	

	public function delete_request($ID)
	{


			  
		$this->db->where('Request_id',$ID)->delete('table_request');
		
		redirect($_SERVER['HTTP_REFERER']);
		
	
	}


	public function request_user($ID)
	{

		$idata['Sender_id']=$this->session->userdata('ID');
		$idata['Receiver_id']=$ID;

		$this->db->insert('table_request',$idata);
			  
		
		
		redirect($_SERVER['HTTP_REFERER']);
		

	
	}

	public function approve_request($ID)
	{
 
		$this->db->where('Sender_id',$ID)->where('Receiver_id',$this->session->userdata('ID'))->set('Accept','1')->update('table_request');
			  
		
		
		redirect($_SERVER['HTTP_REFERER']);
		

	
	}



	public function Settings()
	{

		$data['title']='Edit Profile';


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


		$data['user']=$this->db->where('ID',$this->session->userdata('ID'))->get('tbl_user')->result_array();


		$this->load->view('user/inc/header');
		$this->load->view('user/edit-user',$data);
		$this->load->view('user/inc/footer');

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

				redirect('User/Settings/'.$id);
				} else {
				$avatar = $this->upload->data();
				$picture = $avatar['file_name'];

				$idata['Picture']=$picture;
				}

				} 

		/////////////////////////---- FILE ADDING CODE -----////////////////////////////
		 
		

			$this->db->where('ID',$this->session->userdata('ID'));
			$this->db->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	


}

