<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Usando Variables</h1>
    <?php
      $nombre = 'Alejandro Cruz Narvaez';
      $edad = 20;
      $salarioMensual = 12500.23;
      $sindicalizado = false;
      echo $nombre.'<br>';
      echo $edad.'<br>';
      echo $salarioMensual.'<br>';
      echo $sindicalizado.'<br>';
      echo ' empleado '.$nombre.' Tiene '.$edad.' years old ';
      ?>
      <h1>Operaciones aritmeticas</h1>
      <?php
        $numero1=15;
        $numero2=10;
        $suma=$numero1+$numero2;
        $resta=$numero1-$numero2;
        $multiplicacion=$numero1*$numero2;
        $divicion=$numero1/$numero2;
        echo ' Suma '.$suma.' Resta '.$resta.' multiplicacion '.$multiplicacion.' divicion '.$divicion;
        echo ' suma '.($numero1+$numero2);
        if($sindicalizado == treu)
        echo "Mensaje1";
        else
          print "Mensaje2";
      ?>
  </body>
</html>
