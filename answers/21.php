<?php
/**
 * Created by PhpStorm.
 * User: Raidkon
 * E-mail: n@raidkon.com
 * Date: 10.10.2018
 * Time: 3:23
 */

class Packer
{
	public static function pack(bool $isAdmin,bool $isModerator,bool $isApproved,int $gender,int $showAdultContent)
	{
		$pack = $gender;
		$pack = $pack | $showAdultContent << 3;
		$pack = $pack | $isApproved << 4;
		$pack = $pack | $isModerator << 5;
		$pack = $pack | $isAdmin << 6;
		return +$pack;
	}
	
	public static function unpack(int $pack)
	{
		$isAdmin = ($pack >> 6) & 1;
		$isModerator = ($pack >> 5) & 1;
		$isApproved = ($pack >> 4) & 1;
		$gender = +($pack & 3);
		$showAdultContent = ($pack >> 3) & 1;
		return [(bool)$isAdmin,(bool)$isModerator,(bool)$isApproved,$gender,(bool)$showAdultContent];
	}
}

foreach ([true,false] as $isAdmin)
	foreach ([true,false] as $isModerator)
		foreach ([true,false] as $isApproved)
			foreach ([2,1,0] as $gender)
				foreach ([true,false] as $showAdultContent)
				{
					$save = [$isAdmin,$isModerator,$isApproved,$gender,$showAdultContent];
					echo "$isAdmin,$isModerator,$isApproved,$gender,$showAdultContent";
					$pack = Packer::pack($isAdmin,$isModerator,$isApproved,$gender,$showAdultContent);
					echo " ($pack)";
					list($isAdmin,$isModerator,$isApproved,$gender,$showAdultContent) = Packer::unpack($pack);
					$check = [$isAdmin,$isModerator,$isApproved,$gender,$showAdultContent];
					echo $save === $check?' = ':' != ';
					echo "$isAdmin,$isModerator,$isApproved,$gender,$showAdultContent",PHP_EOL;
				}