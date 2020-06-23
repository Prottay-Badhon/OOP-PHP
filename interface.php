<?php

interface school{
	function myschool();
		
}
interface college{
	function myCollege();
		
}

interface varsity{
	function myVarsity();
		
}

class teacher implements school,college,varsity{
	public function __construct(){
		$this->myschool();
		$this->myCollege();
		$this->myVarsity();
	}
	function myschool(){
		echo "I am a school tecaher";
	}
	function myCollege(){
		echo "I am a college tecaher";
	}
	function myVarsity(){
		echo "I am a Varsity tecaher";
	}
}
$teacher= new teacher();
?>

	

