
<?php
$login = 'main';
$pass = 'main1';
// Получает содержимое файла в виде массива. В данном примере мы используем
// обращение по протоколу HTTP для получения HTML-кода с удаленного сервера.
$lines = file('db/users.txt');

// Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.

foreach ($lines as $line_num => $line) {
    	$ln = $line_num;
    	get_class ([ object $login ] );
    	get_class ([ object $lines[$line_num] ] );
    	echo $login;
    	echo $lines[$line_num];
    	echo "</br>";

    	if ($login == $lines[$line_num]) { echo 'OK'; }
}

// $lines[8] Второй пример. Получим содержание веб-страницы в виде одной строки.
// См. также описание функции file_get_contents().
$html = implode('', file('db/users.txt'));

// Используем необязательный параметр flags (начиная с PHP 5)
$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
