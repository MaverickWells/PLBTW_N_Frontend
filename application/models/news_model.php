<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NEWS_MODEL extends CI_Model {
	// public function CreateNews($data)
	// {
	// 	$this->db->insert('news', $data);
	//
	// 	return $this->db->affected_rows();
	// }

	// public function GetLocationNews($location)
	// {
	// 	$query = $this->db->get_where('news', array('location' => $location));
	// 	//var_dump($query->row_array());
	// 	return $query->row_array();
	// }
	public function GetCategory()
	{
		$this->db->distinct();
		$this->db->select('category');
		$query = $this->db->get('news');

		return $query->result();
	}

	public function GetAllNews($cat)
	{
		if(isset($cat) && $cat != ''){
			$this->db->where('category', $cat);
		}

		$query = $this->db->get('news');

		return $query->result();
	}

	public function GetNewsMonthPost()
	{
		$month_year = date('m Y');
		$this->db->where("DATE_FORMAT(date, '%m %Y') =", $month_year);
		$query = $this->db->get('news');

		return $query->result();
	}

	public function GetNews($id)
	{
		$query = $this->db->get_where('news', array('id_news' => $id));
		//var_dump($query->row_array());
		return $query->row_array();
	}

	// public function DeleteNews($id)
	// {
	// 	$this->db->where('id_news', $id);
    //     $this->db->delete('news');
	// }
	//
	// public function UpdateNews($data, $idnews)
	// {
	// 	$this->db->where('id_news', $idnews);
	// 	$this->db->update('news', $data);
	// }
}
