<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Api extends Module {
	
	public $version = '1.0';

	public function info() {
		return array(
			'name' => array('en' => 'API'),
			'description' => array('en' => 'API Server'),
			'frontend' => TRUE,
			'backend' => FALSE
		);
	}

	public function install() {
		return TRUE;
	}

	public function uninstall() {
		return TRUE;
	}

	public function upgrade($old_version) {
		return TRUE;
	}

}

?>