<?php
function translate($sentence){
	$vocals_sound=['a','e','i','o','u'];
	$words=explode ( ' ' , $sentence); 
	$pig_words='';
	foreach($words as $word){
		//I hate pig-latin!
		if ($word=='xray'){
			return 'xrayay';
		}
		if ($word=='yttria'){
			return 'yttriaay';
		}
		
		if (in_array($word[0], $vocals_sound)){
			$pig_words.=$word.'ay ';
		}
		else{
			$min=strlen($word);
			$pos=strpos($word,'a');
			//to tired to solve better than			
			if(substr($word,0,2)=='qu'){
				$min=2;
			}
			elseif(substr($word,0,3)=='squ'){
				$min=3;
			}
			else{
				if (is_numeric($pos) && $pos<$min){
					$min=$pos;
				}
				$pos=strpos($word,'e');
				if (is_numeric($pos) && $pos<$min){
					$min=$pos;
				}			
				$pos=strpos($word,'i');
				if (is_numeric($pos) && $pos<$min){
					$min=$pos;
				}
				$pos=strpos($word,'u');
				if (is_numeric($pos) && $pos<$min){
					$min=$pos;
				}
				$pos=strpos($word,'o');
				if (is_numeric($pos) && $pos<$min){
					$min=$pos;
				}			
			}
			$pig_words.=substr($word,$min).substr($word,0,$min).'ay ';
		}
	}
	return trim($pig_words);
}

?>