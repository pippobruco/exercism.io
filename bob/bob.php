<?php
Class Bob{
	function respondTo($sentence){
		$trimmed_sentece=trim($sentence);
		if (strlen($trimmed_sentece)==0){
			return 'Fine. Be that way!';
		}
		elseif(ctype_upper (preg_replace("/[^A-Za-z]/", '', $trimmed_sentece))){
			return 'Whoa, chill out!';
		}
		elseif(strpos($trimmed_sentece,'?') == strlen($trimmed_sentece)-1){
			
			return 'Sure.';
		}		
		else{
			return 'Whatever.';
		}
	}
}
?>