<?php

class x_user {
	public $uid;
	public $ulevel;
	public $ulevel_text;
	public $uip;
	public $islogin = FALSE;
	
	function __construct() {
		if ( !$this->islogin && isset($_SESSION['uid']) && isset($_SESSION['uip']) ) {
			$this->login();
		}
		if ( !$this->islogin && isset($_COOKIE['uid']) && isset($_COOKIE['upass']) ) {
			$this->cookie_login();
		}
		T('User Class Initialized','trace');
	}

	function update() {
		if ( $this->islogin ) {
			$sql = "UPDATE account SET online='1',active_time='"._T."' WHERE username='{$this->uid}' ";
			$this->db->query($sql);
		}
	}

	function cookie_login() {
		$dba =& LC('dba');
		$uid = $_COOKIE['uid'];
		$upass = $_COOKIE['upass'];
		if ( $uid && $upass ) {
			$sql = "SELECT * FROM account WHERE username='{$uid}' AND sha_pass_hash='{$upass}'";
			$rs = $dba->get($sql);
			if ( $rs['total'] == 1 ) {
				$_SESSION['uid'] = $rs['data']['username'];
				$_SESSION['uip'] = _IP;
				$this->login();
				return;
			}
		}
		setcookie('uid','',time()-1,_U);
		setcookie('upass','',time()-1,_U);
	}
	
	function login() {
		$dba =& LC('dba');
		$uid = $_SESSION['uid'];
		if ( $_SESSION['uip'] == _IP ) {
			$sql = "SELECT * FROM account LEFT JOIN account_access ON account.id=account_access.id WHERE username='{$uid}' ";
			$rs = $dba->get($sql);
			if ( $rs['total'] == 1 ) {
				$this->uid = $rs['data']['username'];
				$this->ulevel = $rs['data']['gmlevel'];
				$this->ulevel = $this->ulevel ? $this->ulevel : '0';
				$ulevel = C('user.ulevel');
				$this->ulevel_text = $ulevel[$this->ulevel];
				$this->islogin = TRUE;
				$this->uip = $_SESSION['uip'];
				//$this->update();
				return;
			}
		}
		unset($_SESSION['uid']);
		unset($_SESSION['uip']);
	}

}
