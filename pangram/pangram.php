<?php
function isPangram($sentence){
	if (strlen($sentence)==0){
		return false;
	} 
	$alphabet=array_fill(0,25,0);
	for($i=0; $i<strlen($sentence);$i++){
		if (ord($sentence[$i])-97>=0 && ord($sentence[$i])-97<=25){
			$alphabet[ord($sentence[$i])-97]=1;
		}
		elseif (ord($sentence[$i])-65>=0 && ord($sentence[$i])-65<=25){
			$alphabet[ord($sentence[$i])-65]=1;
		}
	}
	if (in_array(0, $alphabet)) {
		return false;
	}
	else{
		return true;
	}
}

?>