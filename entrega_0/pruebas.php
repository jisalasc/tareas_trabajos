<?php
$path_1 = "Archivo1.csv";
$path_2 = "archivo2.csv";
$archivo_1 = fopen($path_1, "r");
$array_1 = [];
while (!feof($archivo_1)){
    $linea = fgets($archivo_1);
    $array_1[] = explode(";", $linea);
}
fclose($archivo_1);

$archivo_2 = fopen($path_2, "r");
$array_2 = [];
while (!feof($archivo_2)){
    $linea = fgets($archivo_2);
    $array_2[] = explode(";", $linea);
}
fclose($archivo_2);

// Limpiar Archivo1 de valores nulos (X en nulos)
for ($i = 1; $i < count($array_1); $i++){
    if ($array_1[$i][0] == ""){
        $array_1[$i][0] = "x";
    }
    if ($array_1[$i][1] == ""){
        $array_1[$i][1] = "x";
    }
    if ($array_1[$i][2] == ""){
        $array_1[$i][2] = "x";
    }
    if ($array_1[$i][3] == ""){
        $array_1[$i][3] = "x";
    }
    if ($array_1[$i][4] == ""){
        $array_1[$i][4] = "x";
    }
    if ($array_1[$i][5] == ""){
        $array_1[$i][5] = "x";
    }
    if ($array_1[$i][6] == ""){
        $array_1[$i][6] = "x";
    }
    if ($array_1[$i][7] == ""){
        $array_1[$i][7] = "x";
    }
    if ($array_1[$i][9] == ""){
        $array_1[$i][9] = "x";
    }
    if ($array_1[$i][10] == ""){
        $array_1[$i][10] = "x";
    }
    if ($array_1[$i][13] == ""){
        $array_1[$i][13] = "x";
    }
    if ($array_1[$i][14] == ""){
        $array_1[$i][14] = "x";
    }
    if ($array_1[$i][15] == ""){
        $array_1[$i][15] = "x";
    }
    if ($array_1[$i][16] == ""){
        $array_1[$i][16] = "x";
    }
    if ($array_1[$i][17] == ""){
        $array_1[$i][17] = "x";
    }
    if ($array_1[$i][18] == ""){
        $array_1[$i][18] = "x";
    }
    if ($array_1[$i][20] == ""){
        $array_1[$i][20] = "x";
    }
    if ($array_1[$i][21] == ""){
        $array_1[$i][21] = "x";
    }
    if ($array_1[$i][22] == ""){
        $array_1[$i][22] = "x";
    }
}
//Limpiar archivo 1 de tipo de datos, int, srr, etc (X en valores erroneos)
for ($i = 1; $i < count($array_1); $i++){
    if (!is_string($array_1[$i][0])){
        $array_1[$i][0] = "x";
    }
    if (!is_string($array_1[$i][1])){
        $array_1[$i][1] = "x";
    }
    if (!is_string($array_1[$i][2])){
        $array_1[$i][2] = "x";
    }
    if (!is_numeric($array_1[$i][4])){
        $array_1[$i][4] = "x";
    }
    if (!strlen($array_1[$i][5])==1){
        $array_1[$i][5] = "x";
    }
    if (!is_string($array_1[$i][6])){
        $array_1[$i][6] = "x";
    }
    if (!is_string($array_1[$i][7])){
        $array_1[$i][7] = "x";
    }
    if (!is_string($array_1[$i][8])){
        $array_1[$i][8] = "x";
    }
    if (!is_string($array_1[$i][9])){
        $array_1[$i][9] = "x";
    }
    if (!is_numeric($array_1[$i][10])){
        $array_1[$i][10] = "x";
    }
    if (!is_string($array_1[$i][11])){
        $array_1[$i][11] = "x";
    }
    if (!is_string($array_1[$i][12])){
        $array_1[$i][12] = "x";
    }
    if (!is_string($array_1[$i][13])){
        $array_1[$i][13] = "x";
    }
    if (!is_string($array_1[$i][14])){
        $array_1[$i][14] = "x";
    }
    if (!is_string($array_1[$i][15])){
        $array_1[$i][15] = "x";
    }
    if (!is_string($array_1[$i][18])){
        $array_1[$i][18] = "x";
    }
    if (!is_numeric($array_1[$i][20])){
        $array_1[$i][20] = "x";
    }
    if (!is_string($array_1[$i][21])){
        $array_1[$i][21] = "x";
    }
}
//Limpiar archivo 2 de no nulos (X en nulos)
for ($i = 1; $i < count($array_2); $i++){
    if ($array_2[$i][0] == ""){
        $array_2[$i][0] = "x";
    }
    if ($array_2[$i][1] == ""){
        $array_2[$i][1] = "x";
    }
}

//Limpiar archivo 2 de valores malos str, int, etc
for ($i = 1; $i < count($array_2); $i++){
    if (!is_numeric($array_2[$i][0])){
        $array_1[$i][0] = "x";
    }
    if (!strlen($array_2[$i][1])==1){
        $array_1[$i][1] = "x";
    }
    if (!is_string($array_2[$i][2])){
        $array_1[$i][2] = "x";
    }
    if (!is_string($array_2[$i][3])){
        $array_2[$i][3] = "x";
    }
    if (!is_string($array_2[$i][4])){
        $array_2[$i][4] = "x";
    }
    if (!is_string($array_2[$i][5])==1){
        $array_2[$i][5] = "x";
    }
    if (!is_string($array_2[$i][6])){
        $array_2[$i][6] = "x";
    }
    if (!is_numeric($array_2[$i][7]) && $array_2[$i][7] != ""){
        $array_2[$i][7] = "x";
    }
    if (!is_string($array_2[$i][8])){
        $array_2[$i][8] = "x";
    }
    if (!is_string($array_2[$i][9])){
        $array_2[$i][9] = "x";
    }
    if (!is_string($array_2[$i][10])){
        $array_2[$i][10] = "x";
    }
    if (!is_string($array_2[$i][11])){
        $array_2[$i][11] = "x";
    }
    if (!is_string($array_2[$i][12])){
        $array_2[$i][12] = "x";
    }
    if (!is_string($array_2[$i][13])){
        $array_2[$i][13] = "x";
    }
    if (!is_string($array_2[$i][14])){
        $array_2[$i][14] = "x";
    }
}
print_r($array_1[0])
?>