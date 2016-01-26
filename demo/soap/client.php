<?php
try {
  // Создание SOAP-клиента
  $client = new SoapClient("http://localhost/spec/spec/soap/stock.wsdl");
	print_r( $client->__getFunctions());
//exit;
  // Посылка SOAP-запроса c получением результат
  $result = $client->getStock("1");
  echo "Текущий запас на складе: ", $result;
} catch (SoapFault $exception) {
  echo $exception->getMessage();
}
?>