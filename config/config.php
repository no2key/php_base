<?php
$dbconf	= array(
	'master' => array(
		'dbhost'	=>	 'localhost',
		'dbport'	=>	 '3306',
		'dbuser'	=>	 'root',
		'dbpasswd'	=>	 'root.1234',
		'dbname'	=>	 'repos'
	),
	'slave' => array(
		'dbhost'	=>	 'localhost',
		'dbport'	=>	 '3307',
		'dbuser'	=>	 'root',
		'dbpasswd'	=>	 'root.1234',
		'dbname'	=>	 'repos'
	)
);

$path = dirname(__FILE__) . '/../files/';

$files = array(
	'city'	=>	$path . 'city.txt',
	'sp'	=>	$path . 'sp.txt'
);

?>
