<?=$this->load('/header')?>



<fieldset>
<legend><?=L('wow.item.search')?></legend>
<form method="get">
<ul class="search">
	<li>
		<strong><?=L('wow.item.entry')?>:</strong>
		<input name="entry" value="<?=$i['entry']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.name')?>:</strong>
		<input name="name" value="<?=$i['name']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.bonding')?>:</strong>
		<?=make_select('bonding',C('item.bonding'),$i['bonding'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.subclass')?>:</strong>
		<?=make_select('subclass',C('item.subclass'),$i['subclass'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.quality')?>:</strong>
		<?=make_select('quality',C('item.quality'),$i['quality'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.itype')?>:</strong>
		<?=make_select('itype',C('item.itype'),$i['itype'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.ilevel')?>:</strong>
		<input type="number" name="ilevel_1" value="<?=$i['ilevel_1']?>" size="3" maxlength="3" max="999" min="0" /> - <input type="number" name="ilevel_2" value="<?=$i['ilevel_2']?>" size="3" maxlength="3" max="999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.rlevel')?>:</strong>
		<input type="number" name="rlevel_1" value="<?=$i['rlevel_1']?>" size="3" maxlength="3" max="999" min="0" /> - <input type="number" name="rlevel_2" value="<?=$i['rlevel_2']?>" size="3" maxlength="3" max="999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.material')?>:</strong>
		<?=make_select('material',C('item.material'),$i['material'],TRUE)?>
	</li>
<?if($user->ulevel>=5):?>
	<li>
		<strong><?=L('custom')?>:</strong>
		<input name="custom" value="<?=$i['custom']?>" maxlength="200" />
	</li>
<?endif;?>
	<li class="footer">
		<button type="submit" class="button"><?=L('search')?>
	</li>
</ul>
</form>
</fieldset>



<fieldset>
<legend><?=L('item_list')?></legend>

<table class="grid">
<tr>
	<th width="50"><?=L('wow.item.entry')?></th>
	<th><?=L('wow.item.name')?></th>
	<th width="50"><?=L('wow.item.class')?></th>
	<th width="70"><?=L('wow.item.subclass')?></th>
	<th width="60"><?=L('wow.item.ilevel')?></th>
	<th width="60"><?=L('wow.item.rlevel')?></th>
	<th width="50"><?=L('wow.item.itype')?></th>
</tr>
<?foreach($rs['data'] as $row):?>
<tr class="bg_<?=$j%3?>">
	<td><a target="_blank" href="<?=U('show?id='.$row['entry'])?>"><?=$row['entry']?></a></td>
	<td><font class="quality_<?=$row['Quality']?>"><?=$row['name']?></font></td>
	<td><?=array_get(C('item.class'),$row['class'],1)?></td>
	<td><?=array_get(C('item.subclass'),$row['class'].'_'.$row['subclass'],1)?></td>
	<td><?=$row['ItemLevel']?></td>
	<td><?=$row['RequiredLevel']?></td>
	<td><?=array_get(C('item.itype'),$row['InventoryType'],1)?></td>
</tr>
<?$j++;endforeach;?>
</table>
<?=pagination($rs);?>
</fieldset>



<?=$this->load('/footer')?>
