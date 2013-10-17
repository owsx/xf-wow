<?=$this->load('/header')?>

<form method="post" action="<?=U('update')?>">

<h2><font class="quality_<?=$row['Quality']?>"><?=$row['name']?></font></h2>

<fieldset>
<legend><?=L('wow.item.info')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.entry')?>:</strong>
		<input name="entry" value="<?=$row['entry']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.name')?>:</strong>
		<input name="name" value="<?=$row['name']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.description')?>:</strong>
		<input name="description" value="<?=$row['description']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.displayid')?>:</strong>
		<input name="displayid" value="<?=$row['displayid']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.bonding')?>:</strong>
		<?=make_select('bonding',C('item.bonding'),$row['bonding'])?>
	</li>
	<li>
		<strong><?=L('wow.item.class')?>:</strong>
		<?=array_get(C('item.class'),$row['class'],1)?>
	</li>
	<li>
		<strong><?=L('wow.item.subclass')?>:</strong>
		<?=make_select('class',C('item.subclass'),$row['class'].'_'.$row['subclass'])?>
	</li>
	<li>
		<strong><?=L('wow.item.quality')?>:</strong>
		<?=make_select('quality',C('item.quality'),$row['Quality'])?>
	</li>
	<li>
		<strong><?=L('wow.item.ilevel')?>:</strong>
		<input type="number" name="ilevel" value="<?=$row['ItemLevel']?>" size="3" maxlength="3" max="999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.itype')?>:</strong>
		<?=make_select('itype',C('item.itype'),$row['InventoryType'])?>
	</li>
	<li>
		<strong><?=L('wow.item.material')?>:</strong>
		<?=make_select('material',C('item.material'),$row['Material'])?>
	</li>
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.required')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.rlevel')?>:</strong>
		<input type="number" name="rlevel" value="<?=$row['RequiredLevel']?>" size="3" maxlength="3" max="999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.allowableclass')?>:</strong>
		<input name="allowableclass" value="<?=$row['AllowableClass']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.allowablerace')?>:</strong>
		<input name="allowablerace" value="<?=$row['AllowableRace']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredskill')?>:</strong>
		<input name="requiredskill" value="<?=$row['RequiredSkill']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredskillrank')?>:</strong>
		<input name="requiredskillrank" value="<?=$row['RequiredSkillRank']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredspell')?>:</strong>
		<input name="requiredspell" value="<?=$row['requiredspell']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredhonorrank')?>:</strong>
		<input name="requiredhonorrank" value="<?=$row['requiredhonorrank']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredcityrank')?>:</strong>
		<input name="requiredcityrank" value="<?=$row['RequiredCityRank']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredreputationfaction')?>:</strong>
		<input name="requiredreputationfaction" value="<?=$row['RequiredReputationFaction']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.requiredreputationrank')?>:</strong>
		<?=make_select('requiredreputationrank',C('reputation.rank'),$row['RequiredReputationRank'])?>
	</li>
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.trade')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.maxcount')?>:</strong>
		<input type="number" name="maxcount" value="<?=$row['maxcount']?>" size="4" max="9999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.stackable')?>:</strong>
		<input type="number" name="stackable" value="<?=$row['stackable']?>" size="4" max="9999" min="1" />
	</li>
	<li>
		<strong><?=L('wow.item.buycount')?>:</strong>
		<input type="number" name="buycount" value="<?=$row['BuyCount']?>" size="4" max="9999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.buyprice')?>:</strong>
		<input type="number" name="buyprice" value="<?=$row['BuyPrice']?>" size="9" maxlength="3" max="999999999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.sellprice')?>:</strong>
		<input type="number" name="sellprice" value="<?=$row['SellPrice']?>" size="9" maxlength="3" max="999999999" min="0" />
	</li>
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.damage')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.delay')?>:</strong>
		<input name="delay" value="<?=$row['delay']?>" />
	</li><br />
	<li>
		<strong><?=L('wow.item.dmg_min')?>1:</strong>
		<input name="dmg_min1" value="<?=$row['dmg_min1']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.dmg_max')?>1:</strong>
		<input name="dmg_max1" value="<?=$row['dmg_max1']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.dmg_type')?>1:</strong>
		<?=make_select('dmg_type1',C('damage.type'),$row['dmg_type1'])?>
	</li>
	<li>
		<strong><?=L('wow.item.dmg_min')?>2:</strong>
		<input name="dmg_min2" value="<?=$row['dmg_min2']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.dmg_max')?>2:</strong>
		<input name="dmg_max2" value="<?=$row['dmg_max2']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.dmg_type')?>2:</strong>
		<?=make_select('dmg_type2',C('damage.type'),$row['dmg_type2'])?>
	</li>
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.deffense')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.armor')?>1:</strong>
		<input name="armor" value="<?=$row['armor']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.holy_res')?>1:</strong>
		<input name="holy_res" value="<?=$row['holy_res']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.fire_res')?>2:</strong>
		<input name="fire_res" value="<?=$row['fire_res']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.nature_res')?>2:</strong>
		<input name="nature_res" value="<?=$row['nature_res']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.frost_res')?>2:</strong>
		<input name="frost_res" value="<?=$row['frost_res']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.shadow_res')?>2:</strong>
		<input name="shadow_res" value="<?=$row['shadow_res']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.arcane_res')?>2:</strong>
		<input name="arcane_res" value="<?=$row['arcane_res']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.durability')?>:</strong>
		<input name="maxdurability" value="<?=$row['MaxDurability']?>" />
	</li>
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.stat')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.statscount')?>:</strong>
		<input type="number" name="statscount" value="<?=$row['StatsCount']?>" size="2" max="99" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>1:</strong>
		<?=make_select('stat_type1',C('item.stat_type'),$row['stat_type1'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>1:</strong>
		<input type="number" name="stat_value1" value="<?=$row['stat_value1']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>2:</strong>
		<?=make_select('stat_type2',C('item.stat_type'),$row['stat_type2'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>2:</strong>
		<input type="number" name="stat_value2" value="<?=$row['stat_value2']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>3:</strong>
		<?=make_select('stat_type3',C('item.stat_type'),$row['stat_type3'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>3:</strong>
		<input type="number" name="stat_value3" value="<?=$row['stat_value3']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>4:</strong>
		<?=make_select('stat_type4',C('item.stat_type'),$row['stat_type4'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>4:</strong>
		<input type="number" name="stat_value4" value="<?=$row['stat_value4']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>5:</strong>
		<?=make_select('stat_type5',C('item.stat_type'),$row['stat_type5'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>5:</strong>
		<input type="number" name="stat_value5" value="<?=$row['stat_value5']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>6:</strong>
		<?=make_select('stat_type6',C('item.stat_type'),$row['stat_type6'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>6:</strong>
		<input type="number" name="stat_value6" value="<?=$row['stat_value6']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>7:</strong>
		<?=make_select('stat_type7',C('item.stat_type'),$row['stat_type7'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>7:</strong>
		<input type="number" name="stat_value7" value="<?=$row['stat_value7']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>8:</strong>
		<?=make_select('stat_type8',C('item.stat_type'),$row['stat_type8'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>8:</strong>
		<input type="number" name="stat_value8" value="<?=$row['stat_value8']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>9:</strong>
		<?=make_select('stat_type9',C('item.stat_type'),$row['stat_type9'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>9:</strong>
		<input type="number" name="stat_value9" value="<?=$row['stat_value9']?>" size="4" max="9999" min="0" />
	</li><br />
	<li>
		<strong><?=L('wow.item.stat_type')?>10:</strong>
		<?=make_select('stat_type10',C('item.stat_type'),$row['stat_type10'])?>
	</li>
	<li>
		<strong><?=L('wow.item.stat_value')?>10:</strong>
		<input type="number" name="stat_value10" value="<?=$row['stat_value10']?>" size="4" max="9999" min="0" />
	</li><br />
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.spell')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.spellid')?>1:</strong>
		<input type="number" name="spellid_1" value="<?=$row['spellid_1']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spelltrigger')?>1:</strong>    
		<?=make_select('spelltrigger_1',C('item.spelltrigger'),$row['spelltrigger_1'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.spellcharges')?>1:</strong>
		<input type="number" name="spellcharges_1" value="<?=$row['spellcharges_1']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellppmRate')?>1:</strong>
		<input type="number" name="spellppmRate_1" value="<?=$row['spellppmRate_1']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcooldown')?>1:</strong>
		<input type="number" name="spellcooldown_1" value="<?=$row['spellcooldown_1']?>" size="5" max="99999" min="-1" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategory')?>1:</strong>
		<input type="number" name="spellcategory_1" value="<?=$row['spellcategory_1']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategorycooldown')?>1:</strong>
		<input type="number" name="spellcategorycooldown_1" value="<?=$row['spellcategorycooldown_1']?>" size="5" max="99999" min="-1" />
	</li><br />
	<li>
		<strong><?=L('wow.item.spellid')?>2:</strong>
		<input type="number" name="spellid_2" value="<?=$row['spellid_2']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spelltrigger')?>2:</strong>    
		<?=make_select('spelltrigger_2',C('item.spelltrigger'),$row['spelltrigger_2'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.spellcharges')?>2:</strong>
		<input type="number" name="spellcharges_2" value="<?=$row['spellcharges_2']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellppmRate')?>2:</strong>
		<input type="number" name="spellppmRate_2" value="<?=$row['spellppmRate_2']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcooldown')?>2:</strong>
		<input type="number" name="spellcooldown_2" value="<?=$row['spellcooldown_2']?>" size="5" max="99999" min="-1" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategory')?>2:</strong>
		<input type="number" name="spellcategory_2" value="<?=$row['spellcategory_2']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategorycooldown')?>2:</strong>
		<input type="number" name="spellcategorycooldown_2" value="<?=$row['spellcategorycooldown_2']?>" size="5" max="99999" min="-1" />
	</li><br />
	<li>
		<strong><?=L('wow.item.spellid')?>3:</strong>
		<input type="number" name="spellid_3" value="<?=$row['spellid_3']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spelltrigger')?>3:</strong>    
		<?=make_select('spelltrigger_3',C('item.spelltrigger'),$row['spelltrigger_3'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.spellcharges')?>3:</strong>
		<input type="number" name="spellcharges_3" value="<?=$row['spellcharges_3']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellppmRate')?>3:</strong>
		<input type="number" name="spellppmRate_3" value="<?=$row['spellppmRate_3']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcooldown')?>3:</strong>
		<input type="number" name="spellcooldown_3" value="<?=$row['spellcooldown_3']?>" size="5" max="99999" min="-1" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategory')?>3:</strong>
		<input type="number" name="spellcategory_3" value="<?=$row['spellcategory_3']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategorycooldown')?>3:</strong>
		<input type="number" name="spellcategorycooldown_3" value="<?=$row['spellcategorycooldown_3']?>" size="5" max="99999" min="-1" />
	</li><br />
	<li>
		<strong><?=L('wow.item.spellid')?>4:</strong>
		<input type="number" name="spellid_4" value="<?=$row['spellid_4']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spelltrigger')?>4:</strong>    
		<?=make_select('spelltrigger_4',C('item.spelltrigger'),$row['spelltrigger_4'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.spellcharges')?>4:</strong>
		<input type="number" name="spellcharges_4" value="<?=$row['spellcharges_4']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellppmRate')?>4:</strong>
		<input type="number" name="spellppmRate_4" value="<?=$row['spellppmRate_4']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcooldown')?>4:</strong>
		<input type="number" name="spellcooldown_4" value="<?=$row['spellcooldown_4']?>" size="5" max="99999" min="-1" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategory')?>4:</strong>
		<input type="number" name="spellcategory_4" value="<?=$row['spellcategory_4']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategorycooldown')?>4:</strong>
		<input type="number" name="spellcategorycooldown_4" value="<?=$row['spellcategorycooldown_4']?>" size="5" max="99999" min="-1" />
	</li><br />
	<li>
		<strong><?=L('wow.item.spellid')?>5:</strong>
		<input type="number" name="spellid_5" value="<?=$row['spellid_5']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spelltrigger')?>5:</strong>    
		<?=make_select('spelltrigger_5',C('item.spelltrigger'),$row['spelltrigger_5'],TRUE)?>
	</li>
	<li>
		<strong><?=L('wow.item.spellcharges')?>5:</strong>
		<input type="number" name="spellcharges_5" value="<?=$row['spellcharges_5']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellppmRate')?>5:</strong>
		<input type="number" name="spellppmRate_5" value="<?=$row['spellppmRate_5']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcooldown')?>5:</strong>
		<input type="number" name="spellcooldown_5" value="<?=$row['spellcooldown_5']?>" size="5" max="99999" min="-1" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategory')?>5:</strong>
		<input type="number" name="spellcategory_5" value="<?=$row['spellcategory_5']?>" size="5" max="99999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.spellcategorycooldown')?>5:</strong>
		<input type="number" name="spellcategorycooldown_5" value="<?=$row['spellcategorycooldown_5']?>" size="5" max="99999" min="-1" />
	</li><br />
</ul>
</fieldset>


<fieldset>
<legend><?=L('wow.item.socket')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.socketcolor')?>:</strong>
		<input name="socketcolor_1" value="<?=$row['socketColor_1']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.socketcolor')?>:</strong>
		<input name="socketcolor_2" value="<?=$row['socketColor_2']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.socketcolor')?>:</strong>
		<input name="socketcolor_3" value="<?=$row['socketColor_3']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.socketbonus')?>:</strong>
		<input name="socketbonus" value="<?=$row['socketBonus']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.gemproperties')?>:</strong>
		<input name="gemproperties" value="<?=$row['GemProperties']?>" />
	</li>
</ul>
</fieldset>

<fieldset>
<legend><?=L('wow.item.other')?></legend>
<ul class="search">
	<li>
		<strong><?=L('wow.item.flags')?>:</strong>
		<input name="flags" value="<?=$row['Flags']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.flagsextra')?>:</strong>
		<input name="flagsextra" value="<?=$row['FlagsExtra']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.containerslots')?>:</strong>
		<input type="number" name="containerslots" value="<?=$row['ContainerSlots']?>" size="3" max="999" min="0" />
	</li>
	<li>
		<strong><?=L('wow.item.totemcategory')?>:</strong>
		<input name="totemcategory" value="<?=$row['TotemCategory']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.ammo_type')?>:</strong>
		<input name="ammo_type" value="<?=$row['ammo_type']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.RangedModRange')?>:</strong>
		<input name="RangedModRange" value="<?=$row['RangedModRange']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.ScalingStatDistribution')?>:</strong>
		<input name="ScalingStatDistribution" value="<?=$row['ScalingStatDistribution']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.ScalingStatValue')?>:</strong>
		<input name="ScalingStatValue" value="<?=$row['ScalingStatValue']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.SoundOverrideSubclass')?>:</strong>
		<input name="SoundOverrideSubclass" value="<?=$row['SoundOverrideSubclass']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.PageText')?>:</strong>
		<input name="PageText" value="<?=$row['PageText']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.LanguageID')?>:</strong>
		<input name="LanguageID" value="<?=$row['LanguageID']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.PageMaterial')?>:</strong>
		<input name="PageMaterial" value="<?=$row['PageMaterial']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.startquest')?>:</strong>
		<input name="startquest" value="<?=$row['startquest']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.lockid')?>:</strong>
		<input name="lockid" value="<?=$row['lockid']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.sheath')?>:</strong>
		<input name="sheath" value="<?=$row['sheath']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.RandomProperty')?>:</strong>
		<input name="RandomProperty" value="<?=$row['RandomProperty']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.RandomSuffix')?>:</strong>
		<input name="RandomSuffix" value="<?=$row['RandomSuffix']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.block')?>:</strong>
		<input name="block" value="<?=$row['block']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.itemset')?>:</strong>
		<input name="itemset" value="<?=$row['itemset']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.area')?>:</strong>
		<input name="area" value="<?=$row['area']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.Map')?>:</strong>
		<input name="Map" value="<?=$row['Map']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.BagFamily')?>:</strong>
		<input name="BagFamily" value="<?=$row['BagFamily']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.RequiredDisenchantSkill')?>:</strong>
		<input name="RequiredDisenchantSkill" value="<?=$row['RequiredDisenchantSkill']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.ArmorDamageModifier')?>:</strong>
		<input name="ArmorDamageModifier" value="<?=$row['ArmorDamageModifier']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.duration')?>:</strong>
		<input name="duration" value="<?=$row['duration']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.ItemLimitCategory')?>:</strong>
		<input name="ItemLimitCategory" value="<?=$row['ItemLimitCategory']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.HolidayId')?>:</strong>
		<input name="HolidayId" value="<?=$row['HolidayId']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.ScriptName')?>:</strong>
		<input name="ScriptName" value="<?=$row['ScriptName']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.DisenchantID')?>:</strong>
		<input name="DisenchantID" value="<?=$row['DisenchantID']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.FoodType')?>:</strong>
		<input name="FoodType" value="<?=$row['FoodType']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.minMoneyLoot')?>:</strong>
		<input name="minMoneyLoot" value="<?=$row['minMoneyLoot']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.maxMoneyLoot')?>:</strong>
		<input name="maxMoneyLoot" value="<?=$row['maxMoneyLoot']?>" />
	</li>
	<li>
		<strong><?=L('wow.item.flagsCustom')?>:</strong>
		<input name="flagsCustom" value="<?=$row['flagsCustom']?>" />
	</li>
</ul>
</fieldset>

	<li class="footer">
		<button type="submit" class="button"><?=L('update')?>
	</li>

</form>

<?=$this->load('/footer')?>
