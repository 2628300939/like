<?php 
echo sum(5,2);
function sum($a,$b)
{
	if($b==0) return $a;
	$sum = $a^$b;
	$num = ($a & $b) << 1;
	return sum($sum,$num);
}


 ?>