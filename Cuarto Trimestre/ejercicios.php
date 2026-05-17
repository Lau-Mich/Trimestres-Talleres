//calcular el perimetro de un rectangulo
<?php
/*$lad1=4;
$lad2=2;
$lad3=4;
$lad4=2;
$perimetro=$lad1+$lad2+$lad3+$lad4;
echo "el perimetro del rectangulo es: ".$perimetro;
?>

//clcular el promedio de 4 numeros
<?php
$num1=5;    
$num2=10;
$num3=15;
$num4=20;
$promedio=($num1+$num2+$num3+$num4)/4;
echo "el promedio de los 4 numeros es: ".$promedio;
?>

//convertir kilometros a metros
<?php
$km=5;
$m=$km*1000;
echo "la cantidad de metros es: ".$m;
?>

//calcular el iva (19%) de un producto
<?php
$precio=100;
$iva=$precio*0.19;
echo "el iva del producto es: ".$iva;
?>

//elevar un numero a la cuarta potencia
<?php
$num=2;
$resultado=$num**4;
echo "el resultado de elevar el numero a la cuarta potencia es: ".$resultado;
?>

//verificar si un numero es multiplo de 2
<?php
$num=6;
if($num%2==0){
    echo "el numero es multiplo de 2";
}else{
    echo "el numero no es multiplo de 2";
}
?>

//determinar si un numero es mayor a 100
<?php
$num=150;
if($num>100){
    echo "el numero es mayor a 100";
}else{
    echo "el numero no es mayor a 100";
}
?>

//validar si una persona puede votar (>=18 años)
<?php
$edad=20;
if($edad>=18){
    echo "la persona puede votar";  
}else{
    echo "la persona no puede votar";
}
?>

//comparar tres numros y mkostrar el menor
<?php
$num1=5;
$num2=10;
$num3=3;
if($num1<$num2 && $num1<$num3){
    echo "el numero menor es: ".$num1;
}elseif($num2<$num1 && $num2<$num3){
    echo "el numero menor es: ".$num2;
}else{
    echo "el numero menor es: ".$num3;
}
?>

//verificar si un numero es divisible entre 4
<?php
$num=16;
if($num%4==0){
    echo "el numero es divisible entre 4";
}else{
    echo "el numero no es divisible entre 4";
}
?>

//mostrar numeros del 5 al 50 de 5 en 5
<?php
for($i=5; $i<=50; $i+=5){
    echo $i." ";
}?>

//generar tablaba de multiplicar del 5
<?php
$tabla=5;
for($i=1; $i<=10; $i++){
    echo $tabla." x ".$i." = ".($tabla*$i)."<br>";
}
?>

//sumar los numeros pares del 1 al 50
<?php
$suma=0;
for($i=2; $i<=50; $i+=2){
    $suma+=$i;
}
echo "la suma de los numeros pares del 1 al 50 es: ".$suma;
?>

//mostrar los cuadrados de los numeros del 1 al 10
<?php
for($i=1; $i<=10; $i++){
    echo "el cuadrado de ".$i." es: ".($i**2)."<br>";
}
?>

//contar cuantos numeros son multiplos de 3 entre 1 y 100
<?php
$contador=0;
for($i=1; $i<=100; $i++){
    if($i%3==0){
        $contador++;
    }
}
echo "la cantidad de numeros multiplos de 3 entre 1 y 100 es: ".$contador;
?>

//mostrar numeros del 1 al 10
<?php
$contador=1;
while ($contador<=10) {
    echo $contador;
    $contador++;
}
?>

//sumar numeros hasta llegar a 50
<?php
$suma=0;
while ($suma<50) {
    $suma += 5; // Puedes cambiar el valor que se suma
}
echo "la suma total es: " . $suma;*/
?>

//pedir numeros hasta ingresar uno negativi
<?php
$numero=1;
while($numero>=0){
    $numero=randline ("Ingrese un numero: ");
    echo $numero;
}
?>