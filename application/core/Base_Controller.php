<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller
{
	
	private $output_formats = array(
		'json' 	=> 'application/json'
    );
	
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
	}
	
	protected function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, strlen($characters) - 1)];
		    }
	    return $randomString;
	}
	
	public function debug($array = NULL){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		die();
	}
	
	/**
	 * @params array $data
	 * @params int $status_code
	 */
    protected function response($data, $status_code = 200)
    {
        foreach($data as $k=>$v)
        {
            switch($k)
            {
               	case 'code':
                    $output_data['code'] = $v;
                break;

                case 'message':
                    $output_data['message'] = $v;
                break;

                case 'total':
                    $output_data['total'] = $v;
                break;

                case 'results':
                    $output_data['results'] = $v;
                break;

                case 'errors':
                    $output_data['errors'] = $v;
                break;

                default:
                    $output_data[$k] = $v;
            }
        }
		
        if (isset($output_data))
        {
            // set http response header
            $this->output->set_status_header($status_code);
            $output = json_encode($output_data);
        }
        else
        {
            // set http response header
            $this->output->set_status_header(500);
            $output = json_encode(array('Internal server error: Try again later.'));
        }
		
		// set output content type
		$this->output->set_header('Content-Type: '.$this->output_formats['json'].'; charset=utf-8');        
		
		// // log the request
		// $this->logger($output);
		
		// send output
		$this->output->set_output($output);
    }

    protected function getError($result) {
		$json = json_decode(isset($result['output'])? $result['output']: NULL);

		if (isset($json->message)) {
			$message = $json->message;
		} else if (isset($result['output'])) {
			$message = $result['output'];
		} else {
    		$message = ERROR_UNDEFINED;
		}

		log_message('error', json_encode($result));

		return $message;
    }
}