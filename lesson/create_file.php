<?php
require_once 'news.php';

$title = $row['title'] . '.php';


$fh = fopen("$title", 'w') or die("Couldn't create file");
$src = "<?php require_once('copy.php')?>";
fwrite($fh, $src);

?>