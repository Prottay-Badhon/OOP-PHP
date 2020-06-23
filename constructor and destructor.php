<?php

 class person{
	public $usrName;
	public $age;
	const id="Prottay Badhon";
	
	public function __construct($name,$userAge){
		$this->usrName = $name;
		$this->age = $userAge;
		echo $this->usrName;
		echo $this->age;
	}
	
	public function __destruct(){
		unset($this->usrName);
		unset($this->age);
	}
	function show(){
		echo "Full Name is:".person::id;
	}
	public static function display(){
		echo "That's a good person";
	}
}

$p1 = new person("Badhon","22");
$p1->show();
person::display();


?>