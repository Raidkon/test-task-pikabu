<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 09.10.2018
 * Time: 23:46
 */

$s[] = 'http://pikabu.ru/2018/01/01/text';
$s[] = 'http://pikabu.ru/2018/01/22/text';
$s[] = 'http://pikabu.ru/2018/01/00/text';
$s[] = 'http://pikabu.ru/2018/01/999/text';
$s[] = 'http://pikabu.ru/2018/01/9/text';
$s[] = 'http://pikabu.ru/201/01/22/text';
$s[] = 'http://pikabu.ru/20181/01/333/text';
$s[] = 'https://www.pikabu.ru/2018/01/dd/text';
$s[] = 'https://WWW.pikabu.ru/2018/01/dd/text';
$s[] = 'https://wwwpikabu.ru/2018/01/dd/text';
$s[] = 'http://wwww.pikabu.ru/2018/01/dd/text';
$s[] = 'http://.pikabu.ru/2018/01/dd/text';
$s[] = 'http://wpikabu.ru/2018/01/dd/text';
$s[] = 'http://pikabuwru/2018/01/dd/text';

foreach ($s as $p)
{
	echo $p,' - ',intval(preg_match('/^http(?:s|):\/\/(?:[a-zA-Z0-9-]{3,10}\.|)pikabu\.ru\/[\d]{4}\/[\d]{2}\/[\d]{2}\/[a-z_\.]{1,20}$/',$p,$m)),PHP_EOL;
}