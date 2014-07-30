@extends('default_layout')

@section('content')

<!-- 	app Status 	-->
@if ($app['host_ip'] AND $app['timeout'])
	<table width="150">
		<tr><td align="center"><b>app Status</b></td></tr>

		<tr>
			<td>Login: </td>
			<td>{{ @fsockopen($app['host_ip'], $app['port_login'], $errno, $errstr, $app['timeout']) ? 'Online' : 'Offline' }}</td>
		</tr>

		<tr>
			<td>Game: </td>
			<td>{{ @fsockopen($app['host_ip'], $app['port_game'], $errno, $errstr, $app['timeout']) ? 'Online' : 'Offline' }}</td>
		</tr>
	</table>
@endif<!-- 	/Server Status 	-->

@stop

<form action="acc.php" method=post>
	UserID:<input type="text" name="name" size 20><br><br>
	Password:<input type="password" name="pass" size 20><br><br>
	<input type=submit name="submit" value="Login">
</form>

<?php
	define('mySQL_hostname', '127.0.0.1');  //database IP
	define('mySQL_database', 'Database');  //database name
	define('mySQL_username', 'User');  //database user
	define('mySQL_password', 'Pass');  //database password

	function l2j_encrypt($password) {
		return base64_encode(pack("H*", sha1(utf8_encode($password))));
	}
	$str =  l2j_encrypt($_POST['pass']);
	$user = $_POST["name"];
	$db_link = mysql_pconnect( mySQL_hostname, mySQL_username, mySQL_password )    or die( 'Error connecting to mysql<br><br>'.mysql_error() );
	$db_select = mysql_select_db( mySQL_database, $db_link )    or die( 'Error connecting to Database<br><br>'.mysql_error() );
	if ($user == '')
	{
		print'Incorrect UserID';
		mysql_close();
	}
	else
	{
		$db_add = mysql_query("INSERT INTO `accounts` VALUES ('$user', '$str', '0', '0', '')") or die( 'Error: '.mysql_error());
	}
	print 'Account Created<br><br>Enjoy youre gameplay.';
	mysql_close();
?>