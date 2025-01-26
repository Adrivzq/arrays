
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>


<?php

// dato 1

$datos = array( 
    "dato 1º" => "Eric", 
    "dato 2º" => "Martinez", 
    "dato 3º" => 23, 
    "dato 4º" => "barcelona"
); 
  
foreach($datos as $key => $value) { 
    echo $key . ": " . $value . "<br>"; 
} 

echo "<br>";
// ejercicio 2

$datos = array( 
    "nombre" => "Eric", 
    "apellido" => "Martinez", 
    "edad" => 23, 
    "ciudad" => "barcelona"
);

foreach($datos as $key => $value) { 
    echo $key . ": " . $value . "<br>"; 
} 

echo"<br>";

//ejercicio 3

$datos ["edad"] =24;

foreach($datos as $key=> $value) {
echo $key . ": " . $value . "<br>";
}


echo"<br>";
//ejerciccio 4

var_dump($datos);

echo "<br>";

// ejercicio5

echo "<br>";

$letters = array(
"letter 1º" => "a",
"letter 2º" => "b",
"letter 3º" => "c",
"letter 4º" => "d",
"letter 5º" => "e",
"letter 6º" => "f",

);

rsort($letters);
foreach($letters as $key => $value){
echo "" . $value . "<br>";  
}




echo "<br>";


//ejercicio 6

$notas = array (
"Miguel" => 5,
"luis"=>7,
"marta"=>10,
"Isabel" =>8,
"Aitor" =>4,
"Pepe" =>1,
);

arsort($notas);
echo "notas de los estudiantes";
foreach($notas as $student => $value){
echo "$student: $value",
 "<br>";
}


//7

$alumnos = [
    ["nombre" => "Marta", "nota" => 10],
    ["nombre" => "Isabel", "nota" => 8],
    ["nombre" => "Luis", "nota" => 7],
    ["nombre" => "Miguel", "nota" => 5],
    ["nombre" => "Aitor", "nota" => 4],
    ["nombre"=> "Pepe", "nota" => 1],
];

// Calcular la media
$media = array_sum(array_column($alumnos, "nota")) / count($alumnos);
echo "La media de las notas es: " . number_format($media, 2) . "\n"; "<br>";

echo "<br>";

echo "Alumnos con nota por encima de la media:\n";
foreach ($alumnos as $alumno) {
    if ($alumno["nota"] > $media) {
        echo "- {$alumno['nombre']}\n";
    }
}

//8
$alumnos = [





];


     
 


?>    

</body>
</html>

