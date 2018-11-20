<?php
  // Importamos la SDK
  require 'vendor/autoload.php';

  // Precio a cobrar
  $precio = "1";

  // Nombre del producto
  $nombreproducto = "Producto falso 1234";

  // URL's de retorno 
  $completado   = "http://..."; 
  $cancelado = "http://...";

  // Inicializar mercadopago con tus credenciales (https://www.mercadopago.com/mla/account/credentials)
  $mp = new MP('TU CLIENT_ID', 'TU CLIENT_SECRET');
  
  // Configuramos las preferencias
  $preference_data = array(
      "items" => [
          [
              "title" => $nombreproducto,
              "quantity" => 1,
              "currency_id" => "ARS", 
              "unit_price" => (double) $precio
          ]
      ],
    "back_urls" => [
      "success" => $completado,
      "failure" => $cancelado
    ]
  );
  
  // Creamos la preferencia con la API de MercadoPago
  $preference = $mp->create_preference($preference_data);
	print_r ($preference);
  // Redireccionar al usuario a la página de pago 
  header("Location: " . $preference['response']['init_point']); 
?>