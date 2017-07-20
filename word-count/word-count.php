<?php
function wordCount($sentence){
	$words=explode ( ' ' ,strtolower(trim(preg_replace('/\s\s+/', ' ',preg_replace('/[^A-Za-z0-9\-]/', ' ', $sentence))))); 
	$occurences = array_count_values($words);
	return $occurences;
}
?>