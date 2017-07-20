<?php

function sieve($num){
	$table=array();
	$result=array();
	for($i=0;$i<=$num;$i++){
		$table[$i]=$i;
	}
	$s=2;
	$j=0;
	while($s<=$num){
		if($table[$s]!=0){
			$result[$j]=$s;
			$j=$j+1;
			$k=$s;
			while($s*$k<=$num){
				$table[$s*$k]=0;
				$k=$k+1;
			}
		}	
		$s=$s+1;
	}
	return $result;
}

?>
