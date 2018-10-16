<?php
require_once 'login.php';
$connect = new mysqli($hn, $un, $pw, $db);
if ($connect->conncect_error) die($connect->connect_error);

$query = "SELECT * FROM `news`";
$result = $connect->query($query);
if (!$result) die ($connect->error);

$text = "require_once('lssons.php')";
fwrite ("test.php", $text) or die('Error');
fclose('test.php');


$href = "http://cell.ru/PHP/news/test.php";
$rows  = $result->num_rows;

$closeA = '</a>';
for($j = 0; $j < $rows; ++$j){
	$fuct = "onclick='chooseYours($j)"
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);

	echo "<br>" . "<span $fuct" . $row['title'] .  "</span><br>";
	$result->data_seek($j);
	
}

$result->close();
$connect->close();





?>