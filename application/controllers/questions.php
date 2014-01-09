<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 */
class Questions extends Front_Controller {

	public function __construct() {
		parent::__construct();
		$this->requireLogin();
		$data['nav'] = 'deals';
		Template::set($data);
	}

	/**
	 * List all deals 
	 * 
	 * @return [type] [description]
	 */
	public function index($id = null) {
		// GET: /deals
		if (!is_null($id)) {
			$this->view($id);
			return;
		}

		$params = $this->getCredentials(); 
		$params['limit']   = $this->getLimit();
		$params['page']    = $this->getPage();
		$params['keyword'] = $this->getQuery();

		$result = doCurl(API_BASE_LINK.'deal/admin/get_deals', $params, 'POST');
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
}