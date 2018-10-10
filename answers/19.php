<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 10.10.2018
 * Time: 2:22
 */

$maxValue = 10;

function isUserBan($arr) {
	global $maxValue; // по хорошему тоже в парметры убрать, но обычно в реальных проект очень рисковано)
	$sum = array_sum($arr);
	return $sum >= $maxValue || abs($sum - $maxValue) < 0.00001;
}

$users = array(
	'user1' => array(1, 4.1, 3.3, 1.12),
	'user2' => array(2, 4.1, 8, 0.2),
	'user3' => array(2, 4.2, 9, 12),
);

$maxValue += 4.3;
foreach ($users as $k => $v) {
	echo $k . ' is ' . (isUserBan($v) ? 'banned' : 'not banned') . PHP_EOL;
}