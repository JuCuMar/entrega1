<!DOCTYPE html>
<html>
<head>
    <title>Ap32</title>
</head>
<body>
   

 <form method="POST" action="">
        <label for="paquetes">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="largo">LARGO:</label>
        <input type="number" id="largo" name="largo" value="">
        <label for="ancho">ANCHO:</label>
        <input type="number" id="ancho" name="ancho" value="">
        <label for="alto">ALTO:</label>
        <input type="number" id="alto" name="alto" value="">
        <br>
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <br>
        <label for="zona">ZONA (Peninsula, balear, Canarias ):</label>
        <input type="text" id="zona" name="zona" value="">
        <br>
        <label for="transporte">TRANSPORTE (maritimo,aereo):</label>
        <input type="text" id="transporte" name="transporte" value="">
        <input type="submit" value="Calcular">

    </form>
    <?php
   /* http://localhost:8080/aev1/ej1.php */
  
$paquetes = $_POST["paquetes"];
$largo = $_POST["largo"];
$ancho = $_POST["ancho"];
$alto = $_POST["alto"];
$peso = $_POST["peso"];
$zona = $_POST["zona"];
$transporte = $_POST["transporte"];
$tamaño = $largo * $ancho * $alto;
$precio = 0;

if ($tamaño <0.51){
    $precio = 50 *$tamaño; 
    echo "El precio del metro cubico es ". $precio." euros <br>";
} elseif ($tamaño <1) {
    $precio = 75*$tamaño;
    echo "El precio del metro cubico es ". $precio." euros  <br>";

}else{
    $precio = 100 * $tamaño;
    echo "El precio del metro cubico es ". $precio." euros  <br>";

}


if ($peso>=5 && $peso <10){
    $precio = $precio + (($precio*25)/100);
    echo "El precio del paquete es ". $precio." euros impuesto del 25% <br>";

}elseif ($peso<15){
    $precio = $precio + (($precio*50)/100);
    echo "El precio del paquete es ". $precio." euros impuesto del 50% <br>";

}elseif ($peso > 15){
    $precio = 0 ;
    echo "el pedido pesa demasiado y se desestima <br>";
}


 if ($zona = "Peninsula"){
    echo "El precio de paquete se mantiene: ". $precio . "euros <br> ";
 }elseif ($zona = "Canarias"){
    $precio = $precio + (($precio*10)/100);
    echo "El precio de paquete se aumenta un 10%: ". $precio . "euros <br> ";
 }elseif($zona = "balear" && $transporte = "maritimo"){
    echo "El precio de paquete se mantiene: ". $precio . "euros <br> ";
} elseif ($zona = "balear" && $transporte = "aereo"){
    $precio = $precio + (($precio*10)/100);
    echo "El precio de paquete se aumenta un 10%: ". $precio . "euros <br> ";

}
echo "El precio del envio es:". $paquetes ." multiplicado por el precio : ". $precio ." que da = ". $precio * $paquetes; 
?>
</body>
</html> 