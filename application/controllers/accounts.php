<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends Front_Controller {

	public function __construct() {
		parent::__construct();
		//$this->requireLogin();
		$data['nav'] = 'accounts';
		Template::set($data);
	}

	/**
	 * List all accounts 
	 * 
	 * @return [type] [description]
	 */
	public function index() {
		// GET: /accounts
		$params = $this->getCredentials(); 
		$params['limit']   = $this->getLimit();
		$params['page']    = $this->getPage();
		$params['keyword'] = $this->getQuery();

		$result = doCurl(API_BASE_LINK.'account/admin/get_accounts', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
			$data['pagination'] = array('total' => $json->total, 'limit' => $this->getLimit(), 'curpage' => $this->getPage(), 'totalpage' => ceil($json->total/$this->getLimit()));
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$data['title'] = 'Deal Listing';
		Template::set($data);
		Template::render();
	}

	public function view() {
		$id = $this->input->get('id');

		if (empty($id)) {
			redirect('accounts');
		}
		$params = $this->getCredentials(); 
		$params['account_id'] = $id;

		// GET: /accounts/$id
		$result = doCurl(API_BASE_LINK.'account/admin/get_accounts', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
		} else {
			$message = $this->getError($result);
			$data['results'] = new stdClass;
			$data['error_message'] = $message;
		}

		$data['title'] = 'Account View';
		Template::set($data);
		Template::set_view('accounts/view');
		Template::render();
	}

	public function deals() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxViewDeal();
			return;
		}
	}

	private function ajaxViewDeal() {
		// GET: /accounts/$id/deal
		$id = $this->input->get('id');

		if (empty($id)) {
			// do something

		}
		$params = $this->getCredentials(); 
		$params['client_secret'] = SECRET_KEY;
		$params['account_id']    = $id;

		// POST: /deals/$id
		$result = doCurl(API_BASE_LINK.'deal/admin/get_deal_by_account', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			$result = $json->results;
			$data['results'] = $result;

			$output['status_code'] = 200;
			$output['results']     = $result;
		} else {
			$message = $this->getError($result);
			$data['results'] = new stdClass;
			$data['error_message'] = $message;

			$output['status_code'] = 400;
			$output['message'] = $message;
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}