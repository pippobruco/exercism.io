<?php
Class Robot{
	protected $myName='';
	static $names=[''];
	function getName(){
		if ($this->myName!=''){
			return $this->myName;
		}
		else{
			$newname='';
			while (in_array($newname,self::$names)){
				$newname=chr(rand(65,90)).chr(rand(65,90)).rand(100,999);
			}
			array_push(self::$names,$newname);
			$this->myName=$newname;
			return $this->myName;
		}
	}
	
	function reset(){
		$this->myName='';
	}
	
}

?>