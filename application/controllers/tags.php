<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tags extends Front_Controller {

	public function __construct() {
		parent::__construct();
		$this->requireLogin();
		$data['nav'] = 'tags';
		Template::set($data);
	}

	/**
	 * List all tags 
	 * 
	 * @return [type] [description]
	 */
	public function index() {
		// GET: /tags
		Template::render();
	}

	public function view() {
		$id = $this->input->get('id');

		if (empty($id)) {
			redirect('tags');
		}

		// GET: /tags/$id
		Template::render();
	}

	public function deal() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxViewDeal();
			return;
		}
	}

	private function ajaxViewDeal() {
		// GET: /tags/$id/deal
	}
}