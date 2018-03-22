<?php
class Client_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}		
	public function get_client($slug = FALSE)
	{
			if ($slug === FALSE)
			{
					$query = $this->db->get('client');
					return $query->result_array();
			}

			$query = $this->db->get_where('client', array('slug' => $slug));
			return $query->row_array();
	}
	public function enter_client()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('firstname'), 'dash', TRUE);

		$data = array(
			'firstname' => $this->input->post('firstname'),
			'slug' => $slug,
			'lastname' => $this->input->post('lastname'),
			'age' => $this->input->post('age'),
			'email' => $this->input->post('email'),
			'gender' => $this->input->post('gender'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'chest' => $this->input->post('chest'),
			'waist' => $this->input->post('waist'),
			'forearm' => $this->input->post('forearm'),
			'thigh' => $this->input->post('thigh'),
			'calves' => $this->input->post('calves')
		);
		return $this->db->insert('client', $data);
	}
	public function enter_newsletter()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email')
		);
		return $this->db->insert('newsletter', $data);
	}
}

?>