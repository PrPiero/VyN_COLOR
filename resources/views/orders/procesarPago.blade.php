<?php
// Cargamos Requests y Culqi PHP
//require_once dirname(__FILE__).'../../public/assets/Requests-develop/library/Requests.php';
require_once 'Beauty_Color_Salon/public/assets/Requests-develop/library/Requests.php';
Requests::register_autoloader();
//require_once dirname(__FILE__).'../../public/assets/culqi-php-master/lib/culqi.php';
require_once 'Beauty_Color_Salon/public/assets/culqi-php-master/lib/culqi.php';

// Configurar tu API Key y autenticación
$SECRET_KEY = "sk_test_488226a15fefd76d";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$charge = $culqi->Charges->create(
    array(
        "amount" => $_POST['precio'],
        "currency_code" => "PEN",
        "email" => $_POST['email'],
        "source_id" => $_POST['token']
      )
   );

   echo 'exitoso';
?>