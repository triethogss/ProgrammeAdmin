<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifications extends Front_Controller {

	public function __construct() {
		parent::__construct();
		$this->requireLogin();
		$data['nav'] = 'notifications';
		Template::set($data);
	}

	/**
	 * List all tags 
	 * 
	 * @return [type] [description]
	 */
	public function index() {
		// GET: /tags
		$data['title'] = 'System Notification';
		Template::set($data);
		Template::render();
	}

	public function create() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxCreate();
			return;
		}
	}

	private function ajaxCreate() {
		$params            = $this->getCredentials(); 
		$params['message'] = $this->input->post('message');

		$result = doCurl(API_BASE_LINK.'notification/admin/announcement', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			// $result = $json->results;
			$data['redirect'] = site_url('notifications');
			$data['message'] = "Notifications sent";
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$output = $data;
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
		return;
	}
}