<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="Numero">Numero:</label>
        <input type="number" id="Numero" name="Numero" value="">
        <input type="submit" value="Calcular">
    </form>
    <?php
   /* http://localhost:8080/aev1/ej2.php */

   $Numero = $_POST["Numero"];
   $repeticion = 0;
   echo "El Numero inicial es ". $Numero. "<br>";
      
       while ($Numero > 1) {
        $repeticion ++;
           echo $Numero. "<br> ";
           if (($Numero % 2) == 0) {
               $Numero = $Numero / 2;
           } else {
               $Numero = ($Numero * 3) + 1;
           }
       }
?>
</body>
</html>