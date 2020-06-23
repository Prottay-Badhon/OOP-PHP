<?php
class calculator{
	public $n1;
	public $n2;
	public function __construct($n1, $n2){
		$this->n1=$n1;
		$this->n2=$n2;
	}
	function sum(){
		echo $this->n1+$this->n2;
	}
}

$job1=new calculator("5","4");
$job1->sum();

?>