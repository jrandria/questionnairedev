<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Http_request_logger {

	private $CI;

	public function __construct() {
        $this->CI =& get_instance();
    }

    public function log_all() {
        log_message('info', 'GET --> ' . var_export($this->CI->input->get(null), true));
        log_message('info', 'POST --> ' . var_export($this->CI->input->post(null), true));                
        log_message('info', '$_SERVER -->' . var_export($_SERVER, true));
    }

}