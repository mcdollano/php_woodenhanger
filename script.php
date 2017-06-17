<?php

	$users = [
		['username' => 'admin',
		'password' => 'password',
		'email' => 'admin@gmail.com'
		'name' => 'admin'],
		['username' => 'mark',
		'password' => 'mark',
		'email' => 'mark@gmail.com'
		'name' => 'mark'],
		['username' => 'pat',
		'password' => 'pat',
		'email' => 'pat@gmail.com'
		'name' => 'pat'],
		['username' => 'krimsy',
		'password' => 'krimsy',
		'email' => 'krimsy@gmail.com'
		'name' => 'krimsy'],
	];
	
	$fp = fopen('users.json', 'w');
	fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	fclose($fp);

	
















?>










