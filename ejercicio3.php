<?php

$productos = array("Zapatillas", "Zapatos", "Botas", "Tacones", "Deportivas");
$precios = array(50, 25, 15, 75, 30);

for ($i = 0; $i < count($productos); $i++) {
    $rebaja = $precios[$i] - ($precios[$i] * 0.2);
    echo "Producto: " . $productos[$i] . " | " . "Precio viejo: " . $precios[$i] . " | " . "Precio nuevo: " . $rebaja . "<br>";
}

?>