


<form action="" method="POST">
<table>
<tr><td>Number 1:</td> <td><input type="number" placeholder="Enter number 1" name="num1"/></td></tr>
<tr><td>Number 2:</td> <td><input type="number" placeholder="Enter number 2" name="num2"/></td></tr>
<tr><td></td> <td><input type="submit"/></td></tr>
</table>
</form>

<?php
if(isset($_POST["num1"]) AND isset($_POST["num2"])){
	$n1=$_POST["num1"];
	$n2=$_POST["num2"];
	echo "First number is:$n1</br>";
	echo "Second number is:$n2</br>";
	echo "</br>";
}
if(empty($n1)OR empty($n2)){
	echo "<h1 style='color:red;'>please fill up all the filed </h1>";
	return 0;
}


class calculation{
	
	
	function summation($num1,$num2){
		$result=$num1+$num2;
		echo "summation is:$result </br>";
	}
	function substraction($num1,$num2){
		$result=$num1-$num2;
		echo "Substruction is:$result </br>";
	}
    function multipication($num1,$num2){
		$result=$num1*$num2;
		echo "multipication is:$result </br>";
	}
	function modulus($num1,$num2){
		$result=$num1%$num2;
		echo "modulus is:$result </br>";
	}
}
$sum=new calculation("Prottay","Badhon");
$sum->summation($n1,$n2);
$sum->substraction($n1,$n2);
$sum->multipication($n1,$n2);
$sum->modulus($n1,$n2);

?>