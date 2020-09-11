<?php
require_once 'php/card_setup.php';
$sections = getItem('sections');
$temp_arr = array(
	'nameming' => array(),
	'section_id' => array()
						);
foreach ($sections as $section) {
	$name = $section['section-name'];
	array_unshift($temp_arr['nameming'], $name);
	$section_id = $section['id'];
	array_unshift($temp_arr['section_id'], $section_id);
	}

$allCategoryCount = count($temp_arr['nameming']);
?>