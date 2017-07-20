<?php 
function toRna($dna){
	$rna='';
	for($i=0;$i<strlen($dna);$i++){
		switch ($dna[$i]) {
			case 'G':
				$rna.='C';
				break;
			case 'C':
				$rna.='G';
				break;
			case 'T':
				$rna.='A';
				break;
			case 'A':
				$rna.='U';
				break;			
		}
	}
	
	return $rna;
}
?>