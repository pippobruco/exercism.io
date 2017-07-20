<?php


function mbStringToArray ($string) { 
    $strlen = mb_strlen($string); 
    while ($strlen) { 
        $array[] = mb_substr($string,0,1,"UTF-8"); 
        $string = mb_substr($string,1,$strlen,"UTF-8"); 
        $strlen = mb_strlen($string); 
    } 
    return $array; 
} 

function sortString($string){
	$stringParts = mbStringToArray($string);
	$collator = new Collator('UTF-8');
	$collator->sort($stringParts);	
	return implode('', $stringParts);	
}


function detectAnagrams($originaWord,$words){
	mb_internal_encoding('UTF-8');
	$collator = new Collator('UTF-8');
	$result=array();
	$sortedOriginalWord=sortString(mb_strtolower($originaWord));
	foreach($words as $word){
		if (
		collator_compare($collator,$sortedOriginalWord,sortString(mb_strtolower($word)))==0 
		&&
		collator_compare($collator,mb_strtolower($originaWord),mb_strtolower($word))!=0){
			array_push($result,$word);
		}
	}
	return $result;
}
?>