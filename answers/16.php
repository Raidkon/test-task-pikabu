<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 10.10.2018
 * Time: 1:44
 */
$str = 'hello world';
$arr = str_split($str);
$arr = count(array_filter($arr,function($v){
	return ord($v)%3 == 0;
}));
