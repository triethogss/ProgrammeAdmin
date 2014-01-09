<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 */
class Deals extends Front_Controller {

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

	private function view($id) {
		$edit = $this->input->get('edit');

		// GET: /deals/$id
		$params = $this->getCredentials();
		$params['deal_id'] = $id;

		$result = doCurl(API_BASE_LINK.'deal/admin/get_deals', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
		} else {
			$message = $this->getError($result);
			$data['results'] = new stdClass;
			$data['error_message'] = $message;
		}

		$data['title'] = 'Deal View';
		Template::set($data);
		Template::set_view('deals/view');
		Template::render();
	}

	public function create() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxCreate();
			return;
		}

		$params = $this->getCredentials(); 

		$result = doCurl(API_BASE_LINK.'account/admin/getSupplier', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['suppliers'] = $result;
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$data['title'] = 'Create new Deal';

		Assets::add_css('libs/bootstrap-tagsinput.css');
		Assets::add_js('libs/bootstrap-tagsinput.min.js');
		Template::set($data);
		Template::render();
	}

	private function ajaxCreate() {
		// PUT: /deals
		$params                       = $this->getCredentials(); 
		$params['title']              = $this->input->post('title');
		$params['description']        = $this->input->post('description');
		$params['supplier_id']        = $this->input->post('supplier_id');
		$params['weight']             = $this->input->post('weight');
		$params['currency_code']      = $this->input->post('currency_code');
		$params['original_price']     = $this->input->post('original_price');
		$params['max_per_person']     = $this->input->post('max_per_person');
		$params['limit']              = $this->input->post('limit');
		$params['started_at']         = $this->input->post('started_at');
		$params['ended_at']           = $this->input->post('ended_at');
		$params['expired_at']         = $this->input->post('expired_at');
		$params['status']             = $this->input->post('status');

		$params['tags']               = $this->input->post('tags');
		$params['tags']               = json_encode(explode(',', $params['tags']));

		// format start and end to myql time
		$utc_tz = new DateTimeZone('UTC');
		// error_log(json_encode($utc_tz));

		$started_at = DateTime::createFromFormat('d-m-Y H:i', $params['started_at']);
		$ended_at   = DateTime::createFromFormat('d-m-Y H:i', $params['ended_at']);
		$expired_at = DateTime::createFromFormat('d-m-Y H:i', $params['expired_at']);

		if ($started_at) {
			$started_at->setTimeZone($utc_tz);
			$params['started_at']   = $started_at->format('Y-m-d H:i:s');
		}

		if ($ended_at) {
			$ended_at->setTimeZone($utc_tz);
			$params['ended_at']     = $ended_at->format('Y-m-d H:i:s');
		}

		if ($expired_at) {
			$expired_at->setTimeZone($utc_tz);
			$params['expired_at']   = $expired_at->format('Y-m-d H:i:s');
		}
		
		if(!isset($_FILES['image']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
			// 
        } else {
        	$data = file_get_contents($_FILES['image']['tmp_name']);
			$data = base64_encode($data);

			$params['image']              =  $data;
        }

        $tier_qtys   = $this->input->post('qty');
		$tier_prices = $this->input->post('price');
		$tier_price = array();

        foreach ($tier_qtys as $key => $value) {
			$tier_price[] = array('target' => $value, 'discounted_price' => $tier_prices[$key]);
		}

		$params['tier_price'] = json_encode($tier_price);

		// $output = $params;
		// $this->output->set_content_type('application/json')->set_output(json_encode($output));
		// return;

		$result = doCurl(API_BASE_LINK.'deal/admin/create_deal', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$output['status_code'] = 200;
			$output['redirect'] = site_url('deals');
			$output['message'] = 'Deal created';

			// $this->session->set_flashdata('success_message', 'Challenge created');
		} else {
			$message = $this->getError($result);

			$output['status_code'] = 400;
			$output['message'] = $message;
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function delete() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxCreate();
			return;
		}
	}

	private function ajaxDelete() {
		$id   = $this->input->get('id');

		if (empty($id)) {
			$output['code'] = 400;
			$output['message'] = '';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}

		// DELETE: /deals/$id/deal
	}

	public function close() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxCreate();
			return;
		}
	}

	private function ajaxClose() {
		$id   = $this->input->get('id');

		if (empty($id)) {
			$output['code'] = 400;
			$output['message'] = '';

			$this->response($output);
			return;
		}

		// POST: /deals/$id/close
		$result = doCurl(API_BASE_LINK.'voucher/voucher_admin/update_voucher_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			// $result = $json->results;

			$output['code'] = 200;
			$output['redirect'] = site_url('vouchers');
			$output['message'] = 'Voucher created';

			$this->session->set_flashdata('success_message', 'Voucher created');
		} else {
			$message = $this->getError($result);

			$output['code'] = 400;
			$output['message'] = $message;
		}

		// $this->output->set_content_type('application/json')->set_output(json_encode($output));
		$this->response($output);
	}

	public function edit() {

	}

	private function ajaxEdit() {
		$id   = $this->input->get('id');

		if (empty($id)) {
			$output['code'] = 400;
			$output['message'] = '';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}

		// POST: /deals/$id
		$result = doCurl(API_BASE_LINK.'voucher/voucher_admin/update_voucher_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			// $result = $json->results;

			$output['code'] = 200;
			$output['redirect'] = site_url('vouchers');
			$output['message'] = 'Voucher created';

			$this->session->set_flashdata('success_message', 'Voucher created');
		} else {
			$message = $this->getError($result);

			$output['code'] = 400;
			$output['message'] = $message;
		}

		// $this->output->set_content_type('application/json')->set_output(json_encode($output));
		$this->response($output);
	}

	public function information($id) {
		// $id   = $this->input->get('id');
		// $edit = $this->input->get('edit');

		// if (empty($id)) {
		// 	redirect('deals');
		// }
		$params = $this->getCredentials(); 
		$params['client_secret'] = SECRET_KEY;
		$params['deal_id']       = $id;

		// POST: /deals/$id
		$result = doCurl(API_BASE_LINK.'deal/admin/get_deal_information', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			$result = $json->results;
			$data['results'] = $result;
		} else {
			$message = $this->getError($result);
			$data['results'] = new stdClass;
			$data['error_message'] = $message;
		}

		// Assets::add_css('libs/summernote.css');
		// Assets::add_js('libs/summernote.min.js');
		// Template::set($data);
		// Template::render();

		$output['status_code'] = 200;
		$output['results']     = $result;

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function editInformation() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxEditInformation();
			return;
		}

		Assets::add_css('libs/summernote.css');
		Assets::add_js('libs/summernote.min.js');
		// Template::set($data);
		Template::render();
	}

	private function ajaxEditInformation() {
		$output = $_POST;
		$output = strip_tags($_POST['content'], '<img />');

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function buyer($id) {
		if (!$this->input->is_ajax_request()) {
			// $this->ajaxEditInformation();
			return;
		}

		$params = $this->getCredentials(); 
		$params['client_secret'] = SECRET_KEY;
		$params['deal_id']       = $id;

		// POST: /deals/$id
		$result = doCurl(API_BASE_LINK.'deal/admin/get_account_by_deal', $params, 'POST');
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
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	/**
	 * List all Questions 
	 * 
	 * @return [type] [description]
	 */
	public function questions($id = null) {
		// GET: /deals

		$params = $this->getCredentials(); 
		$params['limit']   = $this->getLimit();
		$params['page']    = $this->getPage();
		// $params['keyword'] = $this->getQuery();

		$result = doCurl(API_BASE_LINK.'deal/admin/questions', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
			$data['pagination'] = array('total' => $json->total, 'limit' => $this->getLimit(), 'curpage' => $this->getPage(), 'totalpage' => ceil($json->total/$this->getLimit()));
		} else {
			$message = $this->getError($result);
			$data['error_message'] = $message;
		}

		$data['title'] = 'Deal Questions';
		Template::set($data);
		Template::render();
	}
}

/* End of file deals.php */
/* Location: ./application/controllers/deals.php */
