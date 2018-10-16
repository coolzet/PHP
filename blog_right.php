<?php
require_once 'login.php';
$connect = new mysqli($hn, $un, $pw, $db);
if ($connect->conncect_error) die($connect->connect_error);

$query = "SELECT * FROM `blog` ORDER BY `id` DESC";
$result = $connect->query($query);
if (!$result) die ($connect->error);




$rows  = $result->num_rows;


for($j = 0; $j < 3; ++$j){
	$result->data_seek($j);
	$p = $j + 1;
	$id = '#iblog'. $p;
	$d = '#iblog'. ($p - 1);
	$b = '#iblog'. ($p + 1);
	$minustwo = '#iblog'. ($p - 2);

	$plustwo  = '#iblog'. ($p + 2);
	$funct = "onclick=\"chooseYourBlog('$id', '$d', '$b', '$minustwo', '$plustwo')\"";
	$row = $result->fetch_array(MYSQLI_ASSOC);
	

	echo "<br>" . "<a $funct>" . $row['title'] .  "</a><br>";
	$result->data_seek($j);
}

$result->close();
$connect->close();





?>