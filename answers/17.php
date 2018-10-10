<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 10.10.2018
 * Time: 1:51
 */

header('Location: https://www.db-fiddle.com/f/o4wBLEmMdehgc2MXaqpayf/1');
exit;

$sql = "SELECT
	if(t.age is null,'No set',t.age) as age,
    if(t.gender is null,'No set',if(t.gender = 1,'Female','Male')) as gender,
    if(t.mark=5,1,0) as is_positive_mark,
    count(*) as cnt
FROM
	`user_marks` as t
GROUP BY
	t.age,
    t.gender,
    is_positive_mark
HAVING
	cnt > 1";