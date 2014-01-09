<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends Front_Controller {

	public function __construct() {
		parent::__construct();
		$this->requireLogin();
		$data['nav'] = 'transactions';
		Template::set($data);
	}

	/**
	 * List all transactions 
	 * 
	 * @return [type] [description]
	 */
	public function index() {
		// GET: /transactions
		$params = $this->getCredentials(); 
		$params['limit']   = $this->getLimit();
		$params['page']    = $this->getPage();
		// $params['keyword'] = $this->getQuery();
		$params['started_at'] = $this->input->get('started_at');
		$params['ended_at']   = $this->input->get('ended_at');

		$result = doCurl(API_BASE_LINK.'transactions/admin/transactionListing', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
			$data['pagination'] = array('total' => $json->total, 'limit' => $this->getLimit(), 'curpage' => $this->getPage(), 'totalpage' => ceil($json->total/$this->getLimit()));
		} else {
			$message = $this->getError($result);
			$data['results'] = array();
			$data['error_message'] = $message;
		}

		$data['title'] = 'Transacntions listing';
		Template::set($data);
		Template::render();
	}

	public function view() {
		$id = $this->input->get('id');

		if (empty($id)) {
			redirect('transactions');
		}

		// GET: /transactions/$id
		Template::render();
	}

	public function deal() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxViewDeal();
			return;
		}
	}

	private function ajaxViewDeal() {
		// GET: /transactions/$id/deal
	}
}