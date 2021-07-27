<?php
// Cargamos Requests y Culqi PHP
include_once dirname(__FILE__).'/Requests/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'/culqi-php/lib/culqi.php';

$SECRET_KEY = "sk_test_488226a15fefd76d";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$charge = $culqi->Charges->create(
    array(
        "amount" =>  $_POST['precio'],
        "currency_code" => "PEN",
        "email" => $_POST['email'],
        "source_id" => $_POST['token']
      )
   );

   echo 'exitoso';
?>