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
	if ( !f.upass1.value || !f.upass2.value ) {
		alert("<?=L('err.userpass_blank')?>");
		return false;
	}
	if ( f.upass1.value != f.upass2.value ) {
		alert("<?=L('err.diff_pass')?>");
		return false;
	}
	if ( !f.email.value ) {
		alert("<?=L('err.email_blank')?>");
		f.email.focus();
		return false;
	}
	f.upass.value = hex_sha1(f.uid.value.toUpperCase()+":"+f.upass1.value.toUpperCase());
	f.upass1.value = "";
	f.upass2.value = "";
	return true;
}
</script>

<fieldset>
<legend><?=L('register')?></legend>
<form name="form" method="post" action="<?=U('do_register')?>" onsubmit="return check_form()">
<input type="hidden" name="upass" maxlength="250" />
<table>
<tbody>
<tr>
	<th><?=L('userid')?>:</th>
	<td><input type="text" name="uid" maxlength="32" required="required" placeholder="请输入账号" /></td>
</tr>
<tr>
	<th><?=L('email')?>:</th>
	<td><input type="text" name="email" maxlength="64" required="required" placeholder="请输入电子邮箱地址" /></td>
</tr>
<tr>
	<th><?=L('userpass')?>:</th>
	<td><input type="password" name="upass1" maxlength="32" required="required" placeholder="请设置密码"  /></td>
</tr>
<tr>
	<th><?=L('repeatpass')?>:</th>
	<td><input type="password" name="upass2" maxlength="32" required="required" placeholder="请重复输入上面的密码" /></td>
</tr>
</tbody>
<tfoot>
<tr>
	<th></th>
	<td><button type="submit"><?=L('register')?></button></td>
</tr>
</tfoot>
</table>
</form>
</fieldset>

<?=$this->load('/footer')?>
