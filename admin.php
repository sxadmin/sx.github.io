<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>lOGIN</title>
<script>
function r()
{
var username=document.getElementById("username");
var pass=document.getElementById("password");
if(username.value=="")
{
alert("username");
username.focus();
return;
}
if(pass.value=="")
{
alert("password");
return;
}
return true;
}
</script>
</head>
<body>
<form>
<table width="350" bgcolor="#ccffcc" style="border-color" border="1">
<tr align=center>
<td>用户名</td><td><input type="text" name="username" id="username"></td>
</tr>
<tr align=center><td>密 码</td><td><input type="password" name="password" id="password"></td></tr>
<tr align=center><td colspan="2"><input type="button" value="登 录" onclick="r();"/>     <input type="reset" value="重 置"/></td></tr>
</table>
</form>
</body>
</html>