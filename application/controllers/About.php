<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
		// $this->load->view('mymessage');
		 $this->load->view('about');
	}


	public function company()
	{
		// $this->load->view('mymessage');
		 $this->load->view('company');
	}


	public function us($name="")
	{
		// $this->load->view('mymessage');

		$data['name']=$name;
		 $this->load->view('us',$data);
	}


	public function datapass()
	{
		 
	 	$tata['name']='nawaz';
	 	$tata['email']='nawazmucse@gmail.com';
	 	$tata['mobile']='01751200682';


		 $this->load->view('datapass',$tata);
	}



}
