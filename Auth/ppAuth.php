<?php

require_once 'ppAuthLogin.php';
require_once 'ppSession.php';

/**
* the class for Authoraization check 
*/
class PpAuth {

	// the variables for option
	protected $options = array();
	protected $sessoption = array();
	protected $sessobj = null;

	function __construct(array $opts = array()) {
		$this->setDefaults();

		if(is_array($opts) && count($opts) > 0) {
			$this->options = array_merge($this->options, $opts);
		}

		$this->sessoption['timeout'] = 0;

		// session timeout
		if(isset($opts['timeout'])) {
			$this->sessoption['timeout'] = $opts['timeout'];
		}
	}

	protected function setDefaults() {
		$this->options['dsn'] = DSN;
		$this->options['db_user'] = DB_USER;
		$this->options['db_password'] = DB_PASSWORD;
		$this->options['security_salt'] = '';
		$this->options['cryptType'] = 'sha256';
		$this->options['tmplfile'] = 'loginView.html';
		$this->options['sessname'] = '';
	}

	protected function chkLogined() {
		$sess = new PpSession($this->options['sessname'], $this->sessoption);

		if(!$sess->sessionExists()) {
			return false;
		}

		// check the session start and timeout 
		if(!$sess->start()) {
			$sess->endProc();
			return false;
		}

		$loggedin = $sess->get('loggedin');

		// end session
		if(empty($loggedin)) {
			$sess->endProc();
			return false;
		}

		$this->sessobj = $sess;
		return true;
	}

	public function getSessObj() {
		return $this->sessobj;
	}

	// check logined		
	public function isLogined() {

		if(!$this->chkLogined()) {

			$url = 'Location: /login';

			// redirect the login form
			header($url, true, 303);
			exit;
		}
	}

	// the route for login
	public function loginProc() {
		$obj = new PpAuthLogin($this->options);
		$obj->loginProc;
	}
}