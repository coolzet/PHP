<?php
require_once 'login.php'; // Подключение файла с данными о сервере
$connect = new MYSQLI($hn, $un, $pw, $db); // Подключение к БД
if($connect->connect_error) die("Fatal Error"); // Проверка достоверности подключения




for ($j = 0, $id = 1; $j >= -2; $j--, $id++){ // Начало цикла вставки новостей. $j - количество новостей, при помощи $j >=-2 определеяем количество новостей, используем отриц значения т.к. в запросе к БД используется сортировка DESC
$idstr = 'id' . $id; // Присваиваем значению ID строчное значение и подставляем id, так как id не может быть числовым

$new = mysqli_query($connect, "SELECT id FROM `news` ORDER BY `id` DESC"); // запрашиваем id с последней строки таблицы

$result = mysqli_fetch_assoc($new); 
$rows = $result['id']; //присваиваем переменной число, равное последнему id

	
$rows += $j; // Чтобы высвечивалось больше, чем 1 новость мы изменяем номер строки, с которой будем считывать новость на $j строк, в первый раз смещение на 0 строк, второй - на одну строку ниже и т.д.



$result_1 = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = $rows;"); //Запрашиваем у БД запись с id, равным последней строке, в случае, если цикл проходит впервые
$istrue = $result_1->num_rows; // Если запись отсутствует в базе данных, то is true  будет равно 0, в таком случае запустится цикл while
while ($istrue == 0){ // Пока PHP не найдет в БД хоть одну запись с таким id, будет повторяться этот цикл

	$rows -=1; // Поскольку цикл запустился и на нужной строке нет записи, то мы спускаемся на строку ниже для поиска записи.
	$result_1 = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = $rows;"); // Запрашиваем эту строку.
	$istrue =  $result_1->num_rows; // Изменяем значение $istrue на количество строк, если записи опять не будет, цикл повторится, так как istrue будет равен 0
}// Смысл цикла while заключается в том, чтобы избежать постинга на сайт пустой строки в случае, если запись из базы данных была удалена, так как id в БД нарастает всегда, не зависимо от количество записей в БД, таким образом, мы пропустим записи, у которых когда-то был нужный нам id, но впоследствие эта запись была удалена и этот id исчез.

$row = mysqli_fetch_assoc($result_1); // создаем массив со  значением, которое нашел либо цикл for, либо while
$postingtime = $row['postingtime']; // извлекаем время добавления записи, чтобы избежать нагрможденность кода.



echo "<div id=\"$idstr\">" . "<div class=\"posting_time\">Дата добавления: $postingtime</div>" . '<h2>'. $row['title'] . '</h2><br>' . $row['text'] . "</div>";


};
echo "</div>"; 
$connect->close();
$result_1->close();
?>