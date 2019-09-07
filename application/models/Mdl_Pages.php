<?php


class Mdl_pages extends CI_Model {
	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');
	}
	public function submitPage() {
		$pageTitle = $this->input->post('page_title');
		$page_url = str_replace(' ', '-', strtolower($pageTitle));
		$pageStatus = $this->input->post('pageStatus');
		$parentId = $this->input->post('parentId');

		$this->db->where('title', $pageTitle);
		$query = $this->db->get('tbl_pages');

		$data = array(
			'title' => $pageTitle,
			'parent_id' => $parentId,
			'page_content' => $this->input->post('editor'),
			'status' => $pageStatus
		);

		$this->db->insert('tbl_pages', $data);
		$lastInsertedId = $this->db->insert_id();

//		if($query->num_rows() > 0) {
//			$page_url = $page_url.'-'.$lastInsertedId;
//			$data = array('URL' => $page_url);
//			$this->db->where('id',$lastInsertedId);
//			$this->db->update('tbl_pages', $data);
//		} else {
//			$data = array('URL' => $page_url);
//			$this->db->where('id',$lastInsertedId);
//			$this->db->update('tbl_pages', $data);
//		}
	}

	public function getAllPages() {
		$this->db->select('*');
		$this->db->from('tbl_pages');

		return $this->db->get();
	}

	public function getPageInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_pages');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}

	public function submitUpdatedPage($id) {
		$pageTitle = $this->input->post('page_title');
		$pageStatus = $this->input->post('pageStatus');
		$parentId = $this->input->post('parentId');


		$data = array(
			'title' => $pageTitle,
			'page_content' => $this->input->post('editor'),
			'status' => $pageStatus,
			'parent_id' => $parentId
		);

		$this->db->where('id', $id);
		$this->db->update('tbl_pages', $data);
	}

	public function getAllActiveParentPages() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->where('parent_id', '0');
		return $this->db->get('tbl_pages')->result();
	}

	public function getActiveChildPageByParentId($id) {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->where('parent_id', $id);
		return $this->db->get('tbl_pages')->result();
	}

	public function getAboutConentForHome() {
		$this->db->select('*');
		$this->db->where('status', '1');
		$this->db->where('id', 1);
		$query = $this->db->get('tbl_pages');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}









}

