<?php
class teacher{
	
function display($name){
	echo "$name";
} 	

	
}
class student extends teacher{
	public $age;
	function dis(){
	
		echo "Age is:$this->age";
	}
} 
$subObjct= new student;
$subObjct->age="20";

$subObjct->display("Badhon");
$subObjct->dis();



?>