<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tournaments extends Base_Controller {

	public function __construct() {
		parent::__construct();
		$this->requireLogin();
		$data['nav'] = 'tournaments';
		Template::set($data);
	}

	/**
	 * List all users
	 * @return [type] [description]
	 */
	public function index() {
		$data['nav'] = 'tournaments';

		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['page']               = $this->getPage();
		$params['limit']              = $this->getLimit();
		$params['keyword']            = $this->getQuery();

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/get_all_tournament_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
			$data['pagination'] = array('total' => $json->total, 'limit' => $this->getLimit(), 'curpage' => $this->getPage(), 'totalpage' => ceil($json->total/$this->getLimit()));
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			log_message('error', json_encode($result));
			$data['error_message'] = $message;
		}

		Assets::add_js('scripts.js');
		Template::set($data);
		Template::render();
	}

	/**
	 * View Specific user
	 * @return [type] [description]
	 */
	public function view() {
		$data['nav'] = 'tournaments';
		$id = $this->input->get('id');
		$edit = $this->input->get('edit') && true;

		if (empty($id)) {
			redirect('tournaments');
		}

		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['tournament_id']      = $id;

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/get_tournament_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			} else if (isset($result['output'])) {
				$message = $result['output'];
			}
			log_message('error', json_encode($result));
			$data['error_message'] = $message;
		}

		if ($edit) {
			Assets::add_css('bootstrap-datetimepicker.min.css');
			Assets::add_js('jquery.form.min.js');
			Assets::add_js('bootstrap-datetimepicker.min.js');
			Assets::add_js('create.js');
			Assets::add_js('edit.js');
			Template::set_view('tournaments/edit');
		}

		Assets::add_js('view.js');
		Template::set($data);
		Template::render();
	}

	public function create() {
		if ($this->input->is_ajax_request()) {
			// $data = file_get_contents($_FILES['tournament_poster']['tmp_name']);
			// $data = base64_encode($data);
			// log_message('error',json_encode($_FILES['tournament_poster']));
			// log_message('error', $data);

			// $this->output->set_content_type('application/json')->set_output(json_encode($_FILES['tournament_poster']));
			$this->ajaxCreate();
			return;
		}

		$data['nav'] = 'tournaments';
		Assets::add_css('bootstrap-datetimepicker.min.css');
		Assets::add_js('jquery.form.min.js');
		Assets::add_js('bootstrap-datetimepicker.min.js');
		Assets::add_js('create.js');
		Template::set($data);
		Template::render();
	}

	public function edit() {
		if ($this->input->is_ajax_request()) {
			if ($this->input->post('tournament_id')) {
				$this->ajaxEdit();
			};
			return;
		}
	}

	/**
	 * todo
	 * @return [type] [description]
	 */
	public function result() {
		$this->load->helper('lionmen');

		$id = $this->input->get('id');

		if (empty($id)) {
			redirect('tournaments');
		}

		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['tournament_id']      = $id;

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/get_winner_list', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$data['results'] = $result;
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			} else if (isset($result['output'])) {
				$message = $result['output'];
			}
			log_message('error', json_encode($result));
			$data['error_message'] = $message;
		}

		Assets::add_js('handlebars-v1.1.2.min.js');
		Assets::add_js('result.js');
		Assets::add_js('winnerlist.js');
		Template::set($data);
		Template::render();
	}

	public function publish() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxPublish();
			return;
		}
	}

	public function delete() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxDelete();
			return;
		}
	}

	public function message() {
		if ($this->input->is_ajax_request()) {
			$this->ajaxMessage();
			return;
		}
	}

	private function ajaxCreate() {
		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['name']               = $this->input->post('tournament_name');
		$params['start_at']           = $this->input->post('tournament_start_date');
		$params['end_at']             = $this->input->post('tournament_end_date');
		$params['terms_condition']    = $this->input->post('tournament_toc');
		$params['cost']               = $this->input->post('tournament_cost');

		// format start and end to myql time
		$start_date = DateTime::createFromFormat('d-m-Y H:m:s', $params['start_at']);
		$end_date   = DateTime::createFromFormat('d-m-Y H:m:s', $params['end_at']);
		// $start_date = date_create_from_format('dd-MM-yyyy hh:mm:ss', $params['start_at']);
		// $end_date   = date_create_from_format('dd-MM-yyyy hh:mm:ss', $params['end_at']);
		// log_message('error', json_encode($start_date));

		$params['start_at'] = $start_date->format('Y-m-d H:i:s');
		$params['end_at']   = $end_date->format('Y-m-d H:i:s');
		// $params['start_at'] = date_format($start_date, 'Y-m-d H:i:s');
		// $params['end_at']   = date_format($end_date, 'Y-m-d H:i:s');

		if(!is_uploaded_file($_FILES['tournament_poster']['tmp_name'])) {

        } else {
        	$data = file_get_contents($_FILES['tournament_poster']['tmp_name']);
			$data = base64_encode($data);

			$params['photo']              =  $data;
        }

		// start dealing with tournament prizes
		$prize['name']       = $this->input->post('prize_name');
		$prize['detail']     = $this->input->post('prize_detail');
		$prize['toc']        = $this->input->post('prize_toc');
		$prize['start_rank'] = $this->input->post('prize_start_rank');
		$prize['end_rank']   = $this->input->post('prize_end_rank');

		$prizes_list = array();
		
		if(isset($_FILES['prize_image']['tmp_name']))
    	{
			$prize['image']      = $_FILES['prize_image'];

			if (!empty($prize['name'])) {
				foreach ($prize['name'] as $key => $value) {
					$aprize['name']              = $prize['name'][$key];
					$aprize['detail_redemption'] = $prize['detail'][$key];
					$aprize['terms_condition']   = $prize['toc'][$key];
					$aprize['start_rank']        = $prize['start_rank'][$key];
					$aprize['end_rank']          = $prize['end_rank'][$key];

					if(!is_uploaded_file($prize['image']['tmp_name'][$key]))
		            {
		                $messages[] = 'No file uploaded';
		            } else {
		            	// $data = file_get_contents($_FILES['tournament_poster']['tmp_name']);
						$data = file_get_contents($prize['image']['tmp_name'][$key]);
						$data = base64_encode($data);

						$aprize['photo']             = $data;
		            }

		            $prizes_list[] = $aprize;
				}
			}
		}

		$params['prizes_list'] = json_encode($prizes_list);

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/create_tournament_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			// $result = $json->results;

			$output['code'] = 200;
			$output['redirect'] = site_url('tournaments');
			$output['message'] = 'Tournaments created';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			// log_message('error', json_encode($result));

			$output['code'] = 400;
			$output['message'] = $message;

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		}
	}

	private function ajaxEdit() {
		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['tournament_id']      = $this->input->post('tournament_id');
		$params['name']               = $this->input->post('tournament_name');
		$params['start_at']           = $this->input->post('tournament_start_date');
		$params['end_at']             = $this->input->post('tournament_end_date');
		$params['terms_condition']    = $this->input->post('tournament_toc');
		$params['cost']               = $this->input->post('tournament_cost');

		// format start and end to myql time
		$start_date = DateTime::createFromFormat('d-m-Y H:i:s', $params['start_at']);
		$end_date   = DateTime::createFromFormat('d-m-Y H:i:s', $params['end_at']);
		// $start_date = date_create_from_format('dd-MM-yyyy hh:mm:ss', $params['start_at']);
		// $end_date   = date_create_from_format('dd-MM-yyyy hh:mm:ss', $params['end_at']);
		// log_message('error', json_encode($start_date));

		$params['start_at'] = $start_date->format('Y-m-d H:i:s');
		$params['end_at']   = $end_date->format('Y-m-d H:i:s');
		// $params['start_at'] = date_format($start_date, 'Y-m-d H:i:s');
		// $params['end_at']   = date_format($end_date, 'Y-m-d H:i:s');

		if(!isset($_FILES['tournament_poster']) || !is_uploaded_file($_FILES['tournament_poster']['tmp_name'])) {

        } else {
        	$data = file_get_contents($_FILES['tournament_poster']['tmp_name']);
			$data = base64_encode($data);

			$params['photo']              =  $data;
        }

		// start dealing with tournament prizes
		$prize['name']       = $this->input->post('prize_name');
		$prize['detail']     = $this->input->post('prize_detail');
		$prize['toc']        = $this->input->post('prize_toc');
		$prize['start_rank'] = $this->input->post('prize_start_rank');
		$prize['end_rank']   = $this->input->post('prize_end_rank');
		$prize['prize_id']   = $this->input->post('prize_id');

		$prize['prize_index'] = $this->input->post('prize_index');

		// now deal with the prizes list
		$prizes_list = array();

		if (!empty($prize['name'])) {
			$i = 0; // cannot use key

			foreach ($prize['name'] as $key => $value) {
				$aprize['name']              = $prize['name'][$key];
				$aprize['detail_redemption'] = $prize['detail'][$key];
				$aprize['terms_condition']   = $prize['toc'][$key];
				$aprize['start_rank']        = $prize['start_rank'][$key];
				$aprize['end_rank']          = $prize['end_rank'][$key];
				
				if (isset($prize['prize_id'][$key])) {
					$aprize['id'] = $prize['prize_id'][$key];
				} else {
					unset($aprize['id']);
				}
				// $aprize['id']                = isset($prize['prize_id'][$key])?$prize['prize_id'][$key]:'';

				if (!empty($prize['prize_index'][$key])) {
					$prize['image']      = $_FILES['prize_image'];

					if(!isset($_FILES['prize_image']) || !is_uploaded_file($_FILES['prize_image']['tmp_name'][$i]))
		            {
		            	log_message('error', 'no image');
		            } else {
						$data = file_get_contents($prize['image']['tmp_name'][$i]);
						$data = base64_encode($data);

						$aprize['photo']             = $data;
						$i++;
		            }
				} else {
					// empty, means image not updated
				}

		        $prizes_list[] = $aprize;
			}
		}

		$params['prizes_list'] = json_encode($prizes_list);

		// $output = $_FILES;
		// $output = $prizes_list;
		// $output = $prize['prize_index'];
		// $this->output->set_content_type('application/json')->set_output(json_encode($output));
		// return;

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/update_tournament_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			$output['code'] = 200;
			$output['redirect'] = site_url('tournaments');
			$output['message'] = 'Tournaments Edited';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			log_message('error', json_encode($result));

			$output['code'] = 400;
			$output['message'] = $message;

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		}
	}

	private function ajaxPublish() {
		$id = $this->input->post('id');

		if (empty($id)) {
			$output['code'] = 400;
			$output['message'] = 'Missing Tournament ID';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}

		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['tournament_id']      = $id;

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/publish_tournament', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			$output['code'] = 200;
			$output['message'] = 'Tournaments is Published';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			log_message('error', json_encode($result));

			$output['code'] = 400;
			$output['message'] = $message;

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}
	}

	public function ajaxDelete() {
		$id = $this->input->post('id');

		if (empty($id)) {
			$output['code'] = 400;
			$output['message'] = 'Missing Tournament ID';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}

		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['tournament_id']      = $id;

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/delete_tournament_admin', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			$output['code'] = 200;
			$output['redirect'] = site_url('tournaments');
			$output['message'] = 'Tournaments is Deleted';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			log_message('error', json_encode($result));

			$output['code'] = 400;
			$output['message'] = $message;

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}
	}

	public function ajaxMessage() {
		$id = $this->input->post('id');
		$pid = $this->input->post('pid');

		if (empty($id)) {
			$output['code'] = 400;
			$output['message'] = 'Missing Tournament ID';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}

		if (empty($pid)) {
			$output['code'] = 400;
			$output['message'] = 'Missing Prize ID';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}

		$params['admin_id']           = $this->getAccountId();
		$params['admin_access_token'] = $this->getAccessToken();
		$params['tournament_id']      = $id;
		$params['prize_id']           = $pid;

		$result = doCurl(API_BASE_LINK.'tournament/tournament_admin/send_email_to_winner', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS) {
			$output['code'] = 200;
			// $output['redirect'] = site_url("tournaments/result?id={$id}");
			$output['message'] = 'Email is sent';

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			log_message('error', json_encode($result));

			$output['code'] = 400;
			$output['message'] = $message;

			$this->output->set_content_type('application/json')->set_output(json_encode($output));
			return;
		}
	}
}