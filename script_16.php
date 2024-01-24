<?php
$str = "Hi , How are u?";
$v = array("a","e","i","o","u","A","E","I","O","U");
$c=0;
for($i=0;$i<strlen($str);$i++)
{
	if(in_array($str[$i],$v))
	{
	$c++;
	}
}

echo $c;


?> 