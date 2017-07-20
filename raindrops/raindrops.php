<?php
function raindrops($num){
	$result='';
	for($i = 1; $i<=$num;$i++) {
		if ($num % $i ==0) {
			if ($i==3){
				$result.='Pling';
			}	
			elseif ($i==5){
				$result.='Plang';
			}
			elseif ($i==7){
				$result.='Plong';
			}
		}
	}
	if (strlen($result)>0){
		return $result;
	}
	else{
		return ''.$num;
	}		
} 
?>