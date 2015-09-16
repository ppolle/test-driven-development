<?php

$tester = new testarea();
echo $tester->testgetarea();

class area{

	function area(){}
	function getarea($length,$width){
		return $length*$width;
	}
}



class testarea{
	var $areaclass;
	function testarea(){
	$this->areaclass=new area();
	}
	function testgetarea(){
	$result = $this->areaclass->getarea(10,12);
  
  if ($result==120){
	  
  	echo "your test has worked";
        }else{
       echo "your test has not worked";
}
}}
