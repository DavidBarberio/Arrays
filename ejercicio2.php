<?php

$productos = array("Zapatillas", "Zapatos", "Botas", "Tacones", "Deportivas");
$precios = array("50€", "25€", "15€", "75€", "30€");

for ($i = 0; $i < count($productos); $i++) {
    echo "Producto: " . $productos[$i] . " | " . "Precio: " . $precios[$i] . "<br>";
}


/*
echo "Producto: " . $productos[0] . " | " . "Precio: " . $precios[1] . "<br>";
echo "Producto: " . $productos[1] . " | " . "Precio: " . $precios[3] . "<br>";
echo "Producto: " . $productos[2] . " | " . "Precio: " . $precios[4] . "<br>";
echo "Producto: " . $productos[3] . " | " . "Precio: " . $precios[0] . "<br>";
echo "Producto: " . $productos[4] . " | " . "Precio: " . $precios[2];
*/

?>