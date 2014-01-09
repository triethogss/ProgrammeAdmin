<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function saveimage()
	{
		$name = time();
        $ext = explode('.',$_POST['file']['name']);
        $filename = $name.'.'.$ext[1];
        // log_message('error', json_encode($_FILES));
        // log_message('error', json_encode($_POST));
  //       $data = file_get_contents($_FILES['tournament_poster']['tmp_name']);
		// $data = base64_encode($data);

		$uploads_dir = '/uploads';

		move_uploaded_file($_POST['file']['tmp_name'], "$uploads_dir/$filename");

		echo "$filename";
	}
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
