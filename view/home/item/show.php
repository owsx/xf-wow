<?=$this->load('/header')?>

<a href="<?=U('edit?id='.$row['entry'])?>"><?=L('edit')?></a>

<dl>
	<dt>
		<font class="quality_<?=$row['Quality']?>"><?=$row['name']?></font>
	</dt>
	<dd>
		<?=L('wow.item.ilevel')?> <?=$row['ItemLevel']?>
	</dd>
<?
if ( $row['bonding'] ) {
	echo '<dd>'.array_get(C('item.bonding'),$row['bonding'],1).'</dd>';
}

	echo array_get(C('item.subclass'),$row['class'].'_'.$row['subclass'],1);


if ( $row['dmg_min1'] ) {
	echo '<dd>'.$row['dmg_min1'].' - '.$row['dmg_max1'].' '.L('wow.item.damage').'</dd>';
	echo '<dd>( per_second '.round(($row['dmg_max1']-$row['dmg_min1'])*1000/$row['delay'],2).' )</dd>';
}

if ( $row['dmg_min2'] ) {
	echo '<dd>'.$row['dmg_min2'].' - '.$row['dmg_max2'].' '.L('wow.item.damage').'</dd>';
	echo '<dd>( per_second '.round(($row['dmg_max2']-$row['dmg_min2'])*1000/$row['delay'],2).' )</dd>';
}


if ( $row['armor'] ) {
	echo '<dd>'.$row['armor'].' armor</dd>';
}

for ($j=1;$j<11;$j++) {
	if ( $row['stat_value'.$j] ) {
		echo '<dd>+'.$row['stat_value'.$j].' '.array_get(C('item.stat_type'),$row['stat_type'.$j],1).'</dd>';
	}
}

for ($j=1;$j<4;$j++) {
	if ( $row['socketColor_'.$j] ) {
		echo '<dd>x '.$row['socketColor_'.$j].'</dd>';
	}
}
if ( $row['socketBonus'] ) {
	echo '<dd>'.L('wow.item.socketbonus').' +'.$row['socketBonus'].' </dd>';
}

if ( $row['holy_res'] ) {
	echo '<dd>+'.$row['holy_res'].' '.L('wow.item.holy_res').'</dd>';
}
if ( $row['fire_res'] ) {
	echo '<dd>+'.$row['fire_res'].' '.L('wow.item.fire_res').'</dd>';
}
if ( $row['nature_res'] ) {
	echo '<dd>+'.$row['nature_res'].' '.L('wow.item.nature_res').'</dd>';
}
if ( $row['frost_res'] ) {
	echo '<dd>+'.$row['frost_res'].' '.L('wow.item.frost_res').'</dd>';
}
if ( $row['shadow_res'] ) {
	echo '<dd>+'.$row['shadow_res'].' '.L('wow.item.shadow_res').'</dd>';
}
if ( $row['arcane_res'] ) {
	echo '<dd>+'.$row['arcane_res'].' '.L('wow.item.arcane_res').'</dd>';
}



if ( $row['MaxDurability'] ) {
	echo '<dd>'.L('wow.item.durability').' '.$row['MaxDurability'].'/'.$row['MaxDurability'].'</dd>';
}
if ( $row['RequiredLevel'] ) {
	echo '<dd>'.L('wow.item.rlevel').' '.$row['RequiredLevel'].'</dd>';
}
if ( $row['description'] ) {
	echo '<dd>"'.$row['description'].'"</dd>';
}


?>

</dl>


<?=$this->load('/footer')?>
