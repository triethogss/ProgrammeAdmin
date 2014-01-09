<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping extends Front_Controller {

	public function __construct() {
		parent::__construct();
		$this->requireLogin();
		$data['nav'] = 'shipping';
		Template::set($data);
	}

	/**
	 * This is to show all shipping rates currently have
	 * @return [type] [description]
	 */
	public function index()
	{
		$params = $this->getCredentials(); 

		$result = doCurl(API_BASE_LINK.'shipping/admin/getRates', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$data['title'] = 'Shipping Rates';

		// Assets::add_css('libs/bootstrap-tagsinput.css');
		// Assets::add_js('libs/bootstrap-tagsinput.min.js');
		Template::set($data);
		Template::render();
	}

	/**
	 * Edit page for shipping
	 * @return [type] [description]
	 */
	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$this->ajaxEdit();
			return;
		}

		$params = $this->getCredentials(); 

		$result = doCurl(API_BASE_LINK.'shipping/admin/getRates', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
			
			$result = doCurl(API_BASE_LINK.'shipping/admin/countryRegionList', $params, 'POST');
			$json = json_decode(isset($result['output'])? $result['output']: NULL);

			$data['countries'] = $json->results;
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$data['title'] = 'Edit Shipping Rate';

		// Assets::add_css('libs/jquery.appendGrid-1.2.0.css');
		// Assets::add_js('libs/jquery.appendGrid-1.2.0.min.js');
		// Assets::add_js('libs/jquery.jtable.min.js');
		Template::set($data);
		Template::render();
	}

	private function ajaxEdit()
	{
		$this->input->post();

		$rates['dest_country_code']  = $this->input->post('dest_country_code');
		$rates['dest_region_code']   = $this->input->post('dest_region_code');
		$rates['dest_city']          = $this->input->post('dest_city');
		$rates['dest_postcode_from'] = $this->input->post('dest_postcode_from');
		$rates['dest_postcode_to']   = $this->input->post('dest_postcode_to');
		$rates['condition_name']     = $this->input->post('condition_name');
		$rates['condition_from']     = $this->input->post('condition_from');
		$rates['condition_to']       = $this->input->post('condition_to');
		$rates['currency_code']      = $this->input->post('currency_code');
		$rates['price']              = $this->input->post('price');

		foreach ($rates['dest_country_code'] as $key => $value) {
			$data                       = array();
			$data['dest_country_code']  = $value;
			$data['dest_region_code']   = $rates['dest_region_code'][$key];
			$data['dest_city']          = $rates['dest_city'][$key];
			$data['dest_postcode_from'] = $rates['dest_postcode_from'][$key];
			$data['dest_postcode_to']   = $rates['dest_postcode_to'][$key];
			$data['condition_name']     = $rates['condition_name'][$key];
			$data['condition_from']     = $rates['condition_from'][$key];
			$data['condition_to']       = $rates['condition_to'][$key];
			$data['currency_code']      = $rates['currency_code'][$key];
			$data['price']              = $rates['price'][$key];

			$shipping_rate_json[] = $data;
		}

		$params = $this->getCredentials();
		$params['shipping_rate_json'] = json_encode($shipping_rate_json);

		// $output = $params;
		// $this->output->set_content_type('application/json')->set_output(json_encode($output));
		// return;
		$result = doCurl(API_BASE_LINK.'shipping/admin/createRateBatch', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			// $result = $json->results;
			// $data['results'] = $result;
			$data['message'] = $json->message;
			$data['redirect'] = site_url('shipping');
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$output = $data;
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
		return;
	}

	public function upload()
	{
		if ($this->input->is_ajax_request()) {
			$this->ajaxEdit();
			return;
		}

		$data['title'] = 'Upload Shipping Rate';
		Template::set($data);
		Template::render();
	}

	private function ajaxUpload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'csv';
		$config['max_size']  = '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
	}

	public function download()
	{

	}

	private function ajaxDownload()
	{

	}
}