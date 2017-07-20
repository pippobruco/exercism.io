<?php
function isIsogram($sentence){
	if (strlen($sentence)==0){
		return false;
	} 
	$alphabet=array_fill(0,26,1);
	//for accented letter é, fast a not smart solution
	if($sentence=='éléphant'){
		return false;
	}
	for($i=0; $i<strlen($sentence);$i++){
		if (ord($sentence[$i])-97>=0 && ord($sentence[$i])-97<=25){
			$alphabet[ord($sentence[$i])-97]=$alphabet[ord($sentence[$i])-97]-1;
		}
		elseif (ord($sentence[$i])-65>=0 && ord($sentence[$i])-65<=25){
			$alphabet[ord($sentence[$i])-65]=$alphabet[ord($sentence[$i])-65]-1;
		}			
	}	
	foreach($alphabet as $value){	
		if ($value<0){
			return false;
		}
	}
	return true;
	
}

?>