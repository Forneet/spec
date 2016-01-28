<?php
header("Content-Type: text/html;charset=utf-8");
// Сокетное соединение
	// Создаем сокет (host+порт)
	$socket = fsockopen("whois.arin.net", 43, $sock_errno, $sock_errmsg, 30);
	if(!$socket)
		echo $sock_errmsg;

	// Создаем POST-строку
	//$str_query = "name=John&age=25";
	$out = "warrantal.com\n";

	// Посылка HTTP-запроса

//$out = "POST /spec/spec/demo/socket/dummy.php HTTP/1.1\r\n";
//$out .= "Host: localhost\r\n";
//$out .= "Content-Type: application/x-www-form-urlencoded\r\n";
//$out .= "Content-length: " . strlen($str_query). "\r\n\r\n";
//$out .="Content-length:" . strlen($str_query).
//		"\r\n\r\n";
	
//$out .= $str_query;
fputs($socket, $out);
	
	// Получаем и выводим ответ
while (!feof($socket)) {
	echo fgets($socket);
}

	// Закрытие соединения
fclose($socket);
?>