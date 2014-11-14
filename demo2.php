<?php 
$numbers = array(10, 20, 30, 40, 50, 60, 70 ,80, 90);

for($index=0; $index<9; $index++)
{
	echo $numbers[$index]."<br/>";
}

echo "----------------------------------------<br/>";

foreach ($numbers as $unitItem ) {
	echo $unitItem."<br/>";
}

echo "----------------------------------------<br/>";

$students = array('s1'=>'varun', 's2'=>'swati', 's3'=>'vikky', 's4'=>'GK', 's5'=>'Garima');
foreach ($students as $key => $value) {
	echo "Key is $key and Value is $value <br/>";
}

echo "----------------------------------------<br/>";
//to print numbers from 0-100
$x=0;
while ( $x <= 100) {
	echo $x++;
	echo "<br/>";
}

echo "----------------------------------------<br/>";
//to print all numbers in $numbers
$cow = 0;
while ( $cow < 9) {
	echo $numbers[$cow++];
	echo "<br/>";
}
echo "----------------------------------------<br/>";

$cow = 100; //from user
 do{
 		if ($cow >= 9 ) {
 			echo "We have only products upto 8";
 			break;	
 		}
		echo $numbers[$cow++];
		echo "<br/>";
	}while ( $cow < 9);

 ?>
