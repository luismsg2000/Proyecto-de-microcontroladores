<html>

<head>

<title></title>

</head>

<body background="parqueo1.jpg">

<p>Pagina de cobros</p>

<br />



</body>


<form action="ingresar.php" method="post">
 <p> Escriba la placa: <input type="text" name="placa" /></p> 
 <p><input type="submit" value="Ingresar"/></p>
 
</form>


<form action="inicio.php" method="post">
 <p><input type="submit" value="Ir a inicio"/></p>
 
 
 
 
 
</form>

<!--GPIO17--> 
  <form action="" method="post">
   <p><input type="submit" name="encender17" value="Abrir Barrera">
 <br></br>
 
 <!--GPIO27--> 
  <form action="" method="post">
   <p><input type="submit" name="encender27" value="Cerrar Barrera">
 <br></br>

</body>
</html>


<?PHP

  if ($_POST[encender17]) { 
   $a- exec(" python /var/www/html/leds/ejecgpio/17/pulso.py ");
   echo $a;
  }
  
  
// Funciones PHP del pin GPIO 27


  if ($_POST[encender27]) { 
   $a- exec(" python /var/www/html/leds/ejecgpio/27/pulso.py ");
   echo $a;
  }


?>
