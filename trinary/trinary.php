<?php
function toDecimal($string){
 $strLen=strlen($string);	
 $total=0;
 $stringParts = str_split($string);
 sort($stringParts);	
 if ($stringParts[$strLen-1]>2){
	return 0;
 }
 for($i=0;$i<$strLen;$i++){
	 $total+=$string[$i]* pow(3,($strLen-$i-1));
 }
 return $total;
}
?>