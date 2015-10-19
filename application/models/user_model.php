<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
	
	public $user;
	
	function __construct() {
		parent::__construct();
	}
	
	public function get_user($user_info) {
		return $this->db->query("SELECT * FROM users WHERE email = '{$user_info['email']}'
		 						 AND password = '{$user_info['password']}'")->row_array();
	}
	
	public function insert_user($user_info) {
		$insert_query = "INSERT INTO users (name, alias, email, password, dob, created_at, updated_at)
						 VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = (array($user_info['name'], $user_info['alias'], $user_info['email'], $user_info['password'], $user_info['dob']));
		$this->db->query($insert_query, $values);
		return $this->db->insert_id();
	}

	public function get_friends_by_id($user_info) {
		$query = "SELECT users.id, users.name, users.alias, users.email FROM users
				  LEFT JOIN friends ON friends.users_id = users.id
				  WHERE friends.friend_id = ?";
		$values = array($user_info['id']);

		return $this->db->query($query, $values)->result_array();
	}

	// public function get_nonfriends() {

	// }

	// public function add_friend() {

	// }

	// public function remove_friend() {
		
	// }
}