<?php

class home_action extends x_action {

	function __construct() {
		parent::__construct();

		$this->_assign('user',$this->user);

		if ( !$this->user->islogin ) {
			R(U('/entry'));
		}
	}

}

class admin_action extends x_action {

	function __construct() {
		parent::__construct();

		$this->_assign('user',$this->user);

		if ( $this->user->ulevel < 5 ) {
			R(U('/entry'));
		}
	}

}

class master_action extends x_action {

	function __construct() {
		parent::__construct();

		$this->_assign('user',$this->user);

		if ( $this->user->ulevel < 5 ) {
			R(U('/entry'));
		}
	}

}
