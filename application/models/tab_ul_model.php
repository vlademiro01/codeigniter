<?php
class tab_ul_model extends CI_Model {

	public function __construct()
	{
	    $this->load->database('cgr_test');
	}

	function get_data()
        {
                $query = $this->db->query('SELECT * FROM brw_tab_ul');
                return $query->result();
        }
}