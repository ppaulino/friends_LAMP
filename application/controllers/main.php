<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	protected $view_data = array();
	protected $user_session = NULL;
	
	function __construct() {
		parent::__construct();
		$this->view_data['user_session'] = $this->user_session = $this->session->userdata("user_session");
	}
	
	public function index() {
		$this->load->view("user_login");
	}
	
	public function process_login() {		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		
		if($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata("login_errors", validation_errors());
			redirect('/');
		}
		else {
			$this->load->model("User_model");							   
			$get_user = $this->User_model->get_user($this->input->post());

			if($get_user) {
				$this->session->set_userdata("user_session", $get_user);
				redirect(base_url("main/home"));
			}
			else {
				$this->session->set_flashdata("login_errors", "Invalid email and/or password");
				redirect('/');
			}
		}
	}
	
	public function process_registration() {
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("alias", "Alias", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm_password]|md5");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|md5");
		$this->form_validation->set_rules("dob", "Birthdate", "trim|required");

		if($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata("registration_errors", validation_errors());
			redirect('/');
		}
		else {
			$this->load->model("User_model");
			$user_input = $this->input->post();			
			$insert_user = $this->User_model->insert_user($user_input);
			
			if($insert_user) {				
				$this->session->set_userdata("user_session", $user_input);
				redirect(base_url("main/home"));
			}
			else {
				$this->session->set_flashdata("registration_errors", "Your info was not registered. Please try again.");
				redirect('/');
			}
		}
	}
	
	public function home() {
		// $this->load->model("User_model");
		// $data['users'] = $this->User_model->get_friends_by_id();
		// $this->load->view("home_view", $data);

		$this->load->model("User_model");
		$user = $this->session->userdata('user');
		$user_info['id'] = $user['id'];
		$get_friends = $this->Users_model->get_friends_by_id($user_info);
		$this->session->set_userdata('friends', $get_friends);
		$user_data['friends'] = $get_friends;
		$this->load->view('home_view', $user_data);
	}

	public function profile() {
		$this->load->view("user_profile", $this->view_data);
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}
	
}