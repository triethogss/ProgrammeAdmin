<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Front_Controller extends Base_Controller
{
	public function __construct()
	{
		// Events::trigger('before_front_controller');
		parent::__construct();

		date_default_timezone_set('Asia/Singapore');

		$this->load->library(array('assets', 'template'));

		Template::set_theme('default', $this->config->item('default_theme'));

		// Add general CSS assets
		Assets::add_css('libs/bootstrap.css');
		Assets::add_css('libs/sb-admin.css');
		Assets::add_css('font-awesome/css/font-awesome.min.css');
		Assets::add_css('libs/bootstrap-datetimepicker.min.css');
		// add by Triet
		// Assets::add_font('font-awesome/fonts/fontawesome-webfont.eot');
		// Assets::add_font('font-awesome/fonts/fontawesome-webfont.svg');
		// Assets::add_font('font-awesome/fonts/fontawesome-webfont.ttf');
		// Assets::add_font('font-awesome/fonts/fontawesome-webfont.woff');
		// Assets::add_font('font-awesome/fonts/FontAwesome.otf');

		// Assets::add_css('alertify.core.css');
		// Assets::add_css('alertify.bootstrap.css');
		Assets::add_css('style.css');
		// Assets::add_css('bootstrap-responsive.min.css');

		// Add general JS assets
		// Assets::add_js('jquery.min.js');
		// Assets::add_js('modernizr.js');
		Assets::add_js('jquery-1.9.1.min.js');
		Assets::add_js('libs/bootstrap.js');
		Assets::add_js('libs/handlebars-v1.1.2.min.js');
		Assets::add_js('libs/bootstrap-paginator.min.js');
		Assets::add_js('libs/moment.min.js');
		Assets::add_js('libs/bootstrap-datetimepicker.min.js');
		Assets::add_js('libs/jquery.blockUI.min.js');
		Assets::add_js('libs/jquery-deparams.min.js');
		Assets::add_js('libs/jquery.form.min.js');
		Assets::add_js('setup.js');
		// Assets::add_js('alertify.min.js');
		Assets::add_js('libs/bootbox.min.js');
		Assets::add_js('init.js');		
		// Assets::add_js('console.min.js');

		Template::set_block('sidebar', 'general/sidebar');
		// Events::trigger('after_front_controller');
		$this->load->helper('date');

		$data['isLogin'] = $this->isLogin();
		$data['title'] = 'Page Title';
		Template::set($data);
	}
	
	protected function setupFlashMessage() {
		$data['error_message']   = $this->session->flashdata('error_message');
		$data['success_message'] = $this->session->flashdata('success_message');
		Template::set($data);
	}


	protected function requireLogin() {
		if(!$this->session->userdata('account_logged_in')){
			// $this->session->set_flashdata('error_message', "Please sign in");
			redirect(site_url());
		}
	}

	protected function isLogin() {
		if ($this->session->userdata('account_logged_in')) {
			return true;
		}

		return false;
	}
	
	protected function getPage() {
		$page = $this->input->get('page');

		if (empty($page)) {
			return DEFAULT_PAGE;
		}

		return $page;
	}
	
	protected function getLimit() {
		$limit = $this->input->get('limit');

		if (empty($limit)) {
			return DEFAULT_LIMIT;
		}

		return $limit;
	}

	protected function getQuery() {
		return $this->input->get('query');
	}
	
	protected function getAccountId(){
		if ($this->session->userdata('account_logged_in')) {
			$userData = $this->session->userdata('account_logged_in');
			if (isset($userData['account_id'])) {
				return $userData['account_id'];
			}
		}

	}
	
	protected function getAccountName(){
		if ($this->session->userdata('account_logged_in')) {
			$userData = $this->session->userdata('account_logged_in');
			if (isset($userData['account_name'])) {
				return $userData['account_name'];
			}
		}
	}
	
	protected function getAccessToken(){
		if ($this->session->userdata('account_logged_in')) {
			$userData = $this->session->userdata('account_logged_in');
			if (isset($userData['access_token'])) {
				return $userData['access_token'];
			}
		}
	}

	protected function getSecretKey() {
		return ADMINSECRET_KEY;
	}

	protected function getCredentials() {
		return array(
			'admin_id' => $this->getAccountId(),
			'admin_access_token' => $this->getAccessToken(),
			'admin_secret' => $this->getSecretKey()
		);
	}
}