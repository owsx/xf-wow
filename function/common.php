<?php

function web_header() {
	$user =& LC('user');
	$tmp = '<div class="user">';
	if ( $user->islogin ) {
		$tmp .= '<span>'.$user->uid.'</span>';
		$tmp .= '<span>'.$user->ulevel_text.'</span>';
		if ( $user->ulevel >= 5 ) $tmp .= '<a href="'.U('/admin/').'">'.L('system_manage').'</a>';
		$tmp .= '<a href="'.U('/entry/index/logout').'">'.L('logout').'</a>';
	} else {
		$tmp .= '<a href="'.U('/entry/index/login').'">'.L('login').'</a>';
		$tmp .= '<a href="'.U('/entry/index/register').'">'.L('register').'</a>';
	}
	$tmp .= '</div>';
	return $tmp;
}

function web_mod() {
	$mod = C('web.mod');
	if ( is_array($mod) && count($mod) ) {
		$url =& LC('uri');
		$m = $url->get_method();
		$tmp = '<ul>';
		foreach( $mod as $v ) {
			$str = $m == $v[0] ? ' class="selected" ' : NULL;
			$tmp .= '<li><a href="'.U($v[0]).'" '.$str.'>'.$v[1].'</a></li>';
		}
		$tmp .= '</ul>';
		return $tmp;
	}
}
