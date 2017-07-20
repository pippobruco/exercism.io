<?php

/*
* Exercise 2: hamming
*/
 
 
function distance($a, $b)
{
	$distance=0;
	$i=0;
    if (strlen($a) != strlen($b)) { 
		throw  new InvalidArgumentException('DNA strands must be of equal length.');	
	}
	else{
		for($i=0; $i<strlen($a); $i++){ 
			if ($a[$i] != $b[$i]) {
				$distance+=1;
			}
		}	
	}	

	return $distance;
}
