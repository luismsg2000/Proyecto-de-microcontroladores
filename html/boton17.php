<html>
 <head>
                        <!--boton17.php--> 
 </head>
 <body>

  <!--GPIO17--> 
  <form action="" method="post">
   GPIO 17&nbsp;<input type="submit" name="encender17" value="Encender">
   <input type="submit" name="apagar17" value="Apagar">
   <input type="submit" name="parpadear17" value="Parpadear">

 <br></br>

 </body>
</html>

<?php

// Funciones PHP del pin GPIO 17


  if ($_POST[encender17]) { 
   $a- exec(" python /var/www/html/leds/ejecgpio/17/enciende.py ");
   echo $a;
  }

  if ($_POST[apagar17]) { 
   $a- exec(" python /var/www/html/leds/ejecgpio/17/apaga.py ");
   echo $a;
  }

  if ($_POST[parpadear17]) { 
   $a- exec(" python /var/www/html/leds/ejecgpio/17/parpadea.py ");
   echo $a;
  }

// Fin de las funciónes del pin GPIO 17


?>
