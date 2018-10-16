<?php
require_once 'login.php';


if(isset($_POST['delite']) && isset($_POST['id'])){
	$id = get_post($connect, 'id');
	$query = "DELETE FROM `news` WHERE `id` = '$id'";
	$result = $connecti->query($query);
	if (!$result) echo "Delite  failed <br><br>";
}


  if (isset($_POST['title'])   &&
      isset($_POST['text'])    &&
      isset($_POST['category'])
      )
  {
    $title   = get_post($connect, 'author');
    $text   = get_post($connect, 'title');
    $category = get_post($connect, 'category');
    $query    = "INSERT INTO news VALUES" .
      "('$title', '$text', '$category')";
    $result   = $connect->query($query);
    if (!$result) echo "INSERT failed<br><br>";
  }

  echo <<<_END
  <form action="10_6_lesson.php" method="post"><pre>
    Title <input type="text" name="title">
     Text <input type="text" name="text">
  Category <input type="text" name="category">
      
           <input type="submit" value="ADD RECORD">
  </pre></form>
_END;

  $query  = "SELECT * FROM `news`";
  $result_2 = $connect->query($query);
  if (!$result_2) die ("Database access failed");

  $rows = $result_2->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $row = $result_2->fetch_array(MYSQLI_ASSOC);

    $r0 = htmlspecialchars($row['title']);
    $r1 = htmlspecialchars($row['text']);
    $r2 = htmlspecialchars($row['category']);
  
    
    echo <<<_END
  <pre>
     Title $r0
     Text $r1
  Category $r2
      
  </pre>
  <form action='10_6_lesson.php' method='post'>
  <input type='hidden' name='delete' value='yes'>
  <input type='hidden' name='isbn' value='$r4'>
  <input type='submit' value='DELETE RECORD'></form>
_END;
  }

  $result_2->close();
  $connect->close();

  function get_post($connect, $var)
  {
    return $connect->real_escape_string($_POST[$var]);
  }




?>