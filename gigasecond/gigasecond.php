<?php
/*
*	Exercise 3: gigasecond
*/

function from($date){	
	/*1000000000 mod 86400 = 6400*/
	new DateInterval('P11574D');
	$date->add(new DateInterval('P11574D'));
	$date->add(new DateInterval('PT6400S'));
	return $date;	
}

?>