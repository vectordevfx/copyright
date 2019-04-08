<?php
function copyright($text,$year){
	$thisYear = date("Y");
	if ($year == $thisYear){
		echo $text . $year;
	}else{
		echo $text . $year . " - ". $thisYear;
	}
}

// Examples
copyright('Made by Super Company © ',2010);
echo '<br>';
$thisYear = date("Y");
copyright('Made by Super Company © ',$thisYear);
?>
