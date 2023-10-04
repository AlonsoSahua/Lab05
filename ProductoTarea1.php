<?php
if(isset($_POST['calcular'])){
        
$importeTotalVendido = floatval($_POST['importeTotalVendido']);
$cantidadHijosEscolar = intval($_POST['cantidadHijosEscolar']);

     
$sueldoBasico = 600;
$BonoPorHijo = 50;
$porcentajeComision = 7.5;
$porcentajeDescuento = 11;

      
$bonificacion = $cantidadHijosEscolar * $BonoPorHijo;
$comision = ($importeTotalVendido * $porcentajeComision) / 100;
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;
$descuento = ($sueldoBruto * $porcentajeDescuento) / 100;
$sueldoNeto = $sueldoBruto - $descuento;

echo "<h2>Resultados:</h2>";
echo "Bonificación por hijos en edad escolar: S/. $bonificacion<br>";
echo "Comisión por ventas: S/. $comision<br>";
echo "Sueldo Bruto: S/. $sueldoBruto<br>";
echo "Descuento: S/. $descuento<br>";
echo "Sueldo Neto: S/. $sueldoNeto<br>";
    }
?>