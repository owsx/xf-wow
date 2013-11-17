<?php

class item_a extends home_action {
	
	function _init() {
		
		$mod = array(
			array('search','search'),
			array('add','add'),
		);
		
		C('web.mod',$mod);
	}

	function index() {
		R(U('search'));
	}

	function search() {
		$i['entry'] = I('get.entry');
		$i['name'] = I('get.name');
		$i['bonding'] = I('get.bonding','');
		$i['subclass'] = I('get.subclass');
		$i['quality'] = I('get.quality','');
		$i['ilevel_1'] = I('get.ilevel_1');
		$i['ilevel_2'] = I('get.ilevel_2');
		$i['rlevel_1'] = I('get.rlevel_1');
		$i['rlevel_2'] = I('get.rlevel_2');
		$i['itype'] = I('get.itype','');
		$i['material'] = I('get.material','');
		$i['custom'] = I('get.custom');
		
		$lang = 4;
		$sql = "SELECT item_template.entry as entry,IFNULL(name_loc{$lang},name) as name,class,subclass,Quality,ItemLevel,RequiredLevel,InventoryType,bonding,description FROM item_template LEFT JOIN locales_item ON item_template.entry=locales_item.entry WHERE item_template.entry>0";
		if ( $i['entry'] ) $sql .= " AND item_template.entry='{$i['entry']}'";
		if ( $i['name'] ) $sql .= " AND IFNULL(name_loc{$lang},name) LIKE '%{$i['name']}%'";
		if ( $i['subclass'] != '' ) {
			$class = explode('_',$i['subclass']);
			$sql .= " AND `class`='{$class['0']}' AND `subclass`='{$class['1']}'";
		}
		if ( $i['bonding'] !== '' ) $sql .= " AND `bonding`='{$i['bonding']}'";
		if ( $i['quality'] !== '' ) $sql .= " AND `quality`='{$i['quality']}'";
		if ( $i['ilevel_1'] ) $sql .= " AND `ItemLevel`>='{$i['ilevel_1']}'";
		if ( $i['ilevel_2'] ) $sql .= " AND `ItemLevel`<='{$i['ilevel_2']}'";
		if ( $i['rlevel_1'] ) $sql .= " AND `RequiredLevel`>='{$i['rlevel_1']}'";
		if ( $i['rlevel_2'] ) $sql .= " AND `RequiredLevel`<='{$i['rlevel_2']}'";
		if ( $i['itype'] !== '' ) $sql .= " AND `InventoryType`='{$i['itype']}'";
		if ( $i['material'] !== '' ) $sql .= " AND `Material`='{$i['material']}'";
		if ( $i['custom'] ) $sql .= " AND ( {$i['custom']} )";
		
		$rs = $this->base['dbw']->page($sql,'p',30);
		
		
		$this->_set('i',$i);
		$this->_set('rs',$rs);

	}
	
	function add() {
		
	}

	function show() {
		$i['id'] = I('get.id');
		if ( !$i['id'] ) {
			msg('err.parameter_error');
		}
		
		$sql = "SELECT * FROM item_template WHERE `entry`='{$i['id']}'";
		$rs = $this->base['dbw']->get($sql);
		$this->_set('i',$i);
		$this->_set('row',$rs['data']);

	}

	function edit() {
		$i['id'] = I('get.id');
		if ( !$i['id'] ) {
			msg('err.parameter_error');
		}
		
		$sql = "SELECT * FROM item_template WHERE `entry`='{$i['id']}'";
		$rs = $this->base['dbw']->get($sql);
		$this->_set('i',$i);
		$this->_set('row',$rs['data']);

	}

}
