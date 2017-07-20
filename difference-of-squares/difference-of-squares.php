<?php
function squareOfSums($num){
	$total=0;
	for($i=1; $i<=$num;$i++){
		$total=$total+$i;
	}
	return $total*$total;
}

function sumOfSquares($num){
	$total=0;
	for($i=1; $i<=$num;$i++){
		$total=$total+($i*$i);
	}
	return $total;
}

function difference($num){
 return squareOfSums($num) - sumOfSquares($num);
}

?>