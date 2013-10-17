<?=$this->load('/header')?>

<script src="<?=_U_R?>js/sha1.js"></script>
<script>
function check_form() {
	var f = document.form;
	if ( !f.uid.value ) {
		alert("<?=L('err.userid_blank')?>");
		f.uid.focus();
		return false;
	}
	if ( !f.upass1.value ) {
		alert("<?=L('err.userpass_blank')?>");
		f.upass1.focus();
		return false;
	}
	f.upass.value = hex_sha1(f.uid.value.toUpperCase()+":"+f.upass1.value.toUpperCase());
	f.upass1.value = "";
	return true;
}
</script>

<fieldset>
<legend><?=L('login')?></legend>
<form name="form" method="post" action="<?=U('do_login')?>" onsubmit="return check_form()">
<input type="hidden" name="upass" maxlength="250" />
<table>
<tbody>
<tr>
	<th><?=L('userid')?>:</th>
	<td><input type="text" name="uid" maxlength="32" required="required" placeholder="请输入账号" /></td>
</tr>
<tr>
	<th><?=L('userpass')?>:</th>
	<td><input type="password" name="upass1" maxlength="32" required="required" placeholder="请输入密码" /></td>
</tr>
<tr>
	<th></th>
	<td><label><input type="checkbox" name="autologin" value="1" checked="checked" /><?=L('autologin')?></label></td>
</tr>
</tbody>
<tfoot>
<tr>
	<th></th>
	<td><button type="submit"><?=L('login')?></button></td>
</tr>
</tfoot>
</table>
</form>
</fieldset>

<?=$this->load('/footer')?>
