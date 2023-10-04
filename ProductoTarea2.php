<?php
if(isset($_POST['calcular'])){
$precioGaseosaActual = 3.0;
$descuentoPorcentaje = 7; 
$caramelosPorGaseosa = 2; 

$cantidadUnidadesAdquiridas = intval($_POST['cantidadUnidadesAdquiridas']);

$nuevoPrecioGaseosa = $precioGaseosaActual - (($precioGaseosaActual * 5) / 100);
$importeCompra = $nuevoPrecioGaseosa * $cantidadUnidadesAdquiridas;
$importeDescuento = ($precioGaseosaActual * $descuentoPorcentaje / 100) * $cantidadUnidadesAdquiridas;
$importeAPagar = $importeCompra - $importeDescuento;
$caramelosObsequio = $caramelosPorGaseosa * $cantidadUnidadesAdquiridas;

echo "<h2>Resultados:</h2>";
echo "Nuevo Precio de la gaseosa: S/. $nuevoPrecioGaseosa<br>";
echo "Importe de la compra: S/. $importeCompra<br>";
echo "Importe del descuento: S/. $importeDescuento<br>";
echo "Importe a pagar: S/. $importeAPagar<br>";
echo "Obsequio de caramelos: $caramelosObsequio<br>";
}
?>
