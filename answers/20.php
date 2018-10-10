<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 10.10.2018
 * Time: 2:42
 */

/* before refactoring */
function calc($a)
{
    $a = ($a & 0x3f) + 1.9 >> 0;
    $c = !1 !== !!+$a?--$a:$a++?~~$a:$a++;
    if (!$c == false) {
        for ($a -= -($c * 3),$c = $a;$a < $c << 0b10;) {
            $a *= $c;
        }
        
        return 0 | (int)$a;
    }else {
        return 0 | sqrt($c);
    }
}

/* after refactoring */
function calc2($a):int
{
    $c = $a = ($a & 63);
    if (!$c == false) {
        $c = $a += $c * 3;
        $e = $c * 2;
        while ($a < $e) {
            $a *= $c;
        }
        
        return (int)$a;
    }else {
        return (int)sqrt($c);
    }
}

function calc3($a):int
{
    return (($a & 63) * 4) ** 2;
}

for ($i = 0;$i <= 63;$i++) {
    $a = calc($i);
    $b = calc2($i);
    $b2 = calc3($i);
    $c = sqrt($a);
    //echo "i = $i,c = $c,a = $a",PHP_EOL;
    
    if ($a !== $b) {
        echo PHP_EOL,' error i = ',$i,PHP_EOL;
        var_dump($a);
        var_dump($b);
    }
    
    if ($a !== $b2) {
        echo PHP_EOL,' error2 i = ',$i,PHP_EOL;
        var_dump($a);
        var_dump($b2);
    }
}