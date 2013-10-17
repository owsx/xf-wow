<?php

class index_a extends x_action {
	
	function _init() {
		$this->table = 'account';
		
		$mod = array(
			array('login',L('login')),
			array('register',L('register')),
			array('recovery',L('recovery')),
		);
		C('web.mod',$mod);
	}

	function index() {
		R(U('login'));
	}

	function login() {
		$this->_show();
	}

	function register() {
		if ( C('reg.type') == 0 ) {
			msg('err.register_close');
		}
		$this->_show();
	}

	function recovery() {
		$this->_show();
	}
	
	function do_login() {
		$i['uid'] = I('post.uid');
		$i['upass'] = I('post.upass');
		$i['autologin'] = I('post.autologin');
		
		if ( !$i['uid'] || !$i['upass'] ) {
			msg('err.empty_fields');
		}
		
		$ip = _IP;
		$time = _T;
		$sql = "SELECT * FROM `ip_banned` WHERE `ip`='{$ip}' AND ( `unbandate`='0' OR `unbandate`>'{$time}' )";
		$rs = $this->dba->get($sql);
		if ( $rs['total'] != 0 ) {
			msg('err.ip_banned');
		}

		$sql = "SELECT * FROM account WHERE `username`='{$i['uid']}'";
		$rs = $this->dba->get($sql);
		if ( $rs['total'] == 0 ) {
			msg('err.userid_not_exist');
		}

		$sql = "SELECT * FROM `account_banned` WHERE `id`='{$rs['data'][id]}' AND ( `unbandate`='0' OR `unbandate`>'{$time}' )";
		$rs1 = $this->dba->get($sql);
		if ( $rs1['total'] != 0 ) {
			msg('err.account_banned');
		}

		if ( $i['autologin'] ) {
			setcookie('uid',$i['uid'],CTIME+7*24*3600,_U);
			setcookie('upass',$i['upass'],CTIME+7*24*3600,_U);
		}
		$_SESSION['uid'] = $rs['data']['username'];
		$_SESSION['uip'] = $ip;

		R(U('/'));
		
	}

	function logout() {
		unset($_SESSION['uid']);
		unset($_SESSION['uip']);
		setcookie('uid','',time()-1,_U);
		setcookie('upass','',time()-1,_U);
		R(U('/'));
	}

	function do_register() {
		$i['uid'] = I('post.uid');
		$i['upass'] = I('post.upass');
		$i['email'] = I('post.email');

		if ( !$i['uid'] || !$i['upass'] || !$i['email'] ) {
			msg('err.empty_fields');
		}

		$ip = _IP;
		$time = _T;
		$sql = "SELECT * FROM `ip_banned` WHERE `ip`='{$ip}' AND ( `unbandate`='0' OR `unbandate`>'{$time}' )";
		$rs = $this->dba->get($sql);
		if ( $rs['total'] != 0 ) {
			msg('err.ip_banned');
		}

		if ( C('reg.limit_email') ) {
			$sql = "SELECT * FROM `account` WHERE `email`='{$i['email']}'";
			$rs = $this->dba->get($sql);
			if ( $rs['total'] != 0 ) {
				msg('err.email_exist');
			}
		}
		
		if ( $diff = C('reg.diff_time') ) {
			$sql = "SELECT joindate FROM `account` WHERE `last_ip`='{$ip}' ORDER BY joindate DESC LIMIT 1";
			$rs = $this->dba->get($sql);
			if ( $rs['total'] != 0 ) {
				if ( $time-strtotime($rs['data']['joindate']) < $diff*60 ) {
					msg('err.register_recent');
				}
			}
		}
		
		$sql = "SELECT * FROM `account` WHERE `username`='{$i['uid']}'";
		$rs = $this->dba->get($sql);
		if ( $rs['total'] != 0 ) {
			msg('err.userid_exist');
		}


		$sql = "INSERT INTO `account` (`username`,`sha_pass_hash`,`email`) VALUES ('{$i['uid']}','{$i['upass']}','{$i['email']}')";
		$this->dba->query($sql);
		msg('success',1,U('index'));

	}

	function do_recovery() {
		$i['uid'] = I('post.uid');
		$i['upass'] = I('post.upass');
		$i['email'] = I('post.email');

		if ( !$i['uid'] || !$i['upass'] || !$i['email'] ) {
			msg('err.empty_fields');
		}

		$ip = _IP;
		$time = _T;
		$sql = "SELECT * FROM `ip_banned` WHERE `ip`='{$ip}' AND ( `unbandate`='0' OR `unbandate`>'{$time}' )";
		$rs = $this->dba->get($sql);
		if ( $rs['total'] != 0 ) {
			msg('err.ip_banned');
		}

		$sql = "SELECT * FROM `account` WHERE `username`='{$i['uid']}' AND `email`='{$i['email']}'";
		$rs = $this->dba->get($sql);
		if ( $rs['total'] != 1 ) {
			msg('err.wrong_userid_email');
		}

		$sql = "UPDATE `account` SET `sha_pass_hash`='{$i['upass']}' WHERE `username`='{$i['uid']}'";
		$this->dba->query($sql);
		msg('success',1,U('index'));

	}

}
