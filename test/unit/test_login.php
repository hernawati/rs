<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://selenium-ide.openqa.org/profiles/test-case">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="selenium.base" href="http://localhost:8585/yii-test/index.php?r=site/login" />
<title>test_login</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">test_login</td></tr>
</thead><tbody>
<tr>
	<td>open</td>
	<td>/yii-test/index.php?r=site/login</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>id=LoginForm_username</td>
	<td>admin</td>
</tr>
<tr>
	<td>type</td>
	<td>id=LoginForm_password</td>
	<td>admin</td>
</tr>
<tr>
	<td>click</td>
	<td>name=yt0</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>name=yt0</td>
	<td></td>
</tr>
<tr>
	<td>verifyTextPresent</td>
	<td></td>
	<td>Welcome to My Web Application</td>
</tr>

</tbody></table>
</body>
</html>
