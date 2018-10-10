<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 09.10.2018
 * Time: 23:42
 */

$arr = [
	['id' => 1],
    ['id' => 3],
    ['id' => 2],
];



uasort($arr,function($e1,$e2){
	return $e1['id'] > $e2['id'];
});
	print_r($arr);