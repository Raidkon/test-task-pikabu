<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 10.10.2018
 * Time: 2:02
 */


function calc($num1)
{
	$numbers = [$num1];
	$func = function($num2) use(&$numbers,&$func) {
		if (is_numeric($num2)){
			$numbers[] = $num2;
			return $func;
		} elseif (count($numbers) < 2) {
			throw new Exception('For calculation requires at least 2 numbers');
		}
		else
		{
			reset($numbers);
			$result = current($numbers);
			while (($num = next($numbers)) !== false) {
				$result = call_user_func($num2,$result,$num);
			}
			return $result;
		}
	};
	
	return $func;
}

$sum = function($a, $b)  { return $a + $b; };
echo PHP_EOL,calc(5)(3)(2)($sum);    // 10
echo PHP_EOL,calc(1)(2)($sum);       // 3
echo PHP_EOL,calc(2)(3)('pow');      // 8
echo PHP_EOL,calc(2)(3)('pow');      // 8