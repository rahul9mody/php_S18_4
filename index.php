<?php
	
	#2

	$date =  date('Y/m/d', time());
	echo "2. <br> The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "   The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "   The value of \$year: ";
	print_r($year);
	echo "<br>";
	echo "<br>";

	#3

	$comp = strcmp($date, $tar);

	if($comp > 0)
	{
		echo "3. The Future<br>";
	}
	else if ($comp < 0)
	{
		echo "3. The Past<br>";
	}
	else if($comp == 0)
	{
		echo "3. Oops<br>";
	}
	echo "<br>";
	#4

	$pos1 = strpos($date , '/');
	$str2 = substr($date, $pos1+1, strlen($date));
	$pos2 = strpos($str2, '/');
	$pos2 += $pos1 +1;

	echo "4.Postion of '/' is : $pos1 and $pos2 <br>";
	echo "<br>";
	#5

	$count = str_word_count($date);
	echo "5. WordCount = $count <br>";
	echo "<br>";
	#6

	$len = strlen($date);
	echo "6. String Length = $len <br>";
	echo "<br>";
	#7

	$asc = ord($date);
	echo "7. ASCII of first char in $date is: $asc <br>";
	echo "<br>";
	#8

	$l2 = substr($date, (strlen($date)-2));
	echo "8. Last Two chars are: $l2 <br>";
	echo "<br>";
	#9

	$y1 = substr($date, 0, $pos1);
	$day =  substr($date, $pos1+1, 2);
	$month = substr($date, $pos2+1);
	//echo "year = $y1, day = $day, month = $month <br>";
	echo "9.<br>";
	$dateArray = array($y1, $day, $month);

	
	for($i = 0; $i < sizeof($dateArray); $i++)
	{
		echo "dateArray[$i] = $dateArray[$i] <br>";
	}
	echo "<br>";
	#10

	echo "10. <br>";

	
	$leapYear = array();

	foreach ($year as $key => $value) 
	{
		if ((($value % 4) == 0) && ((($value % 100) != 0) || (($value % 400) == 0))) 
		{
			$leapYear[$value]= "True";
			//echo "$value ";
		} 
		else 
		{
			$leapYear[$value]= "False";
		}	echo "$value ";
	}
	echo "<br>";
	for ($i = 0; $i < count($leapYear); $i++)
	{
		$temp = $leapYear[array_keys($leapYear)[$i]];
		switch ($temp) 
		{
			case 'True':
				echo "True ";
				break;
			
			default:
				echo "False ";
				break;
		}
	}
	



?>















































