<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Front_Controller {

	public function index() {
		if ($this->isLogin()) {
			Template::set_view('home/dashboard');
		} else {
			// Template::set_block('sidebar');
		}
		Template::set(array('title'=>'Wusic Admin Panel'));
		Template::render();
	}

	public function signin() {
		if (!$this->input->post('email') || !$this->input->post('password')){
			$this->session->set_flashdata('error', 'trying something?');
			redirect('/');
		}

		$params['email']		= $this->input->post('email');
		$params['password']		= $this->input->post('password');

		$result = doCurl(API_BASE_LINK.'account/admin/login', $params, 'POST');
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if(isset($json->status_code) && $json->status_code == STATUS_SUCCESS && isset($json->results)) {
			$result = $json->results;
			$newdata = array(
			   'account_logged_in'	=> array(
					'account_id'  	=> $result->admin_id,
					'account_name'   => $result->admin_email,
					'access_token' 	=> $result->admin_access_token
				)
			);
			$this->session->set_userdata($newdata);
		} else {
			$message = ERROR_UNDEFINED;
			if (isset($json->message)) {
				$message = $json->message;
			}
			$this->session->set_flashdata('error_message', $message);
		}
		
		redirect('/');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}
	// add by Triet
	public function showmessage()
	{
		echo "Show message";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */