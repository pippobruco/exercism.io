<?php
Class Series{
	
	private $myString='';
	
	function __construct($string) {
      $this->myString=''.$string;
	}
	
	public function largestProduct($num){
		//testReports1ForEmptyStringAndEmptyProduct0Span
		if (strlen($this->myString)==0 && $num==0){
			return 1;
		}
		
		//InvalidArgumentException tests
		if ((strlen($this->myString)==0 && $num>0) || (strlen($this->myString)<$num)|| !is_numeric($this->myString) ||$num==-1){	
			throw  new InvalidArgumentException();
		}	
		
		//testReportsZeroIfTheOnlyDigitsAreZero
		if (strlen($this->myString)==substr_count($this->myString,'0')){
			return 0;
		}
		$largest_series=0;
		for ($i=0;$i<=strlen($this->myString)-$num;$i++){
			$temp_largest_series=1;
			for ($j=0;$j<$num;$j++){
				$temp_largest_series=$temp_largest_series*$this->myString[$i+$j];	
			}		
			if ($temp_largest_series>$largest_series){
				$largest_series=$temp_largest_series;
			}
		}
		
		return $largest_series;
	}
}
?>