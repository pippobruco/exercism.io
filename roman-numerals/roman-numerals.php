<?php

function toRoman($num){
	$conversionTable = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1); 
    $return = ''; 
    while($num > 0){ 
        foreach($conversionTable as $rom=>$arb){ 
            if($num >= $arb){ 
                $num -= $arb; 
                $return .= $rom; 
                break; 
            } 
        } 
    } 
    return $return; 

}
?>