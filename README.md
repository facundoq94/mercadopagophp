# mercadopagophp
Checkout basico para recibir pagos con MercadoPago utilizando PHP.

Demo http://facundoq.site/mercadopagophp

1. Primero es necesario tener composer instalado en tu hosting, composer es un manejador de paquetes. 
Los hosting pagos tienen composer instalado, si no podes probar en uno gratuito, 
acá explican como instalarlo: https://www.hostinger.com/tutorials/how-to-install-composer

2. Una vez que tengas instalado composer en tu hosting tenes que conectarte via SSH,
que es una forma de conectarte por consola a tu hosting. 
De esta manera vas a poder instalar la sdk PHP de MercadoPago con este comando:
composer require mercadopago/sdk:0.5.3

3. Para finalizar, copia el archivo index.php en tu hosting configurando los datos que están explicados en los comentarios.
