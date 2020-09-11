<?php

$dbhost = "localhost";
$dbname = "sudak";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function getItem($tableName, $amount = 'all') {
	global $db;
	$amount == 'all' ? $limit = '' : $limit = "LIMIT $amount";
	$allItems = $db->query("SELECT * FROM `$tableName` ORDER BY `id` DESC $limit");
	return $allItems;
}

 ?>
