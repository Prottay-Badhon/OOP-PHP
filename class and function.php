<?php
class school{
 public	$sname;
  public $location;
	function show(){
		echo "School name is:".$this->sname."</br>";
		echo "loaction is:".$this->location."</br>";
	}
	function estabilish($year){
		echo "Estabilish year is:".$year;
	}
}
$info=new school;
$info->sname="Bhurungamari pilot";
$info->location="Bhurungamari,Kurigram";
$info->show();
$info->estabilish(1956);

?>