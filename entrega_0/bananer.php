<?php
// MANEJO DE TIEMPO
$start = microtime(true);

// MANEJO DE ARCHVIOS (.CSV)
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

// LIMPIEZA
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
    if ($array_1[$i][19] > 7.0 || $array_1[$i][19] < 1.0){
        $array_1[$i][19] = "x";
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

//FUNCIONES
// FUNCION ELIMINAR REPETIDOS (DEBEN SER EXACTAMENTE IGUALES)
function eliminar_repetidos($array){
    $array_vacio =[];
    foreach ($array as $linea){
        if (!in_array($linea, $array_vacio)){
            $array_vacio[] = $linea; 
        }
    }
    return $array_vacio;
}

//FUNCION IMPRIMIR
function pretty_print($array){
    foreach ($array as $subarray){
        foreach ($subarray as $elemento){
            echo " | ", $elemento;
        }
        echo "\n";
    }
    return null;
}

//PERSONA
$personas = [["RUN", "DV", "Nombres", "Apellido paterno", "Apellido materno", "Nombre completo", "Telefono", "Mail personal", "Mail institucional"]]; // Matriz de persona no permite duplicados
// Agregar estudiantes a lista de personas
for ($i = 1; $i < count($array_1); $i++) {
    $datos_estudiante = [$array_1[$i][4], $array_1[$i][5], $array_1[$i][6], $array_1[$i][7], $array_1[$i][8], $array_1[$i][9],"x", $array_1[$i][11], $array_1[$i][12]];
    array_push($personas, $datos_estudiante);
}
$personas = eliminar_repetidos($personas); // Quitar duplicados 
// Agregar archivo2 a personas
for ($i = 1; $i < count($array_2); $i++) {
    $datos_personas = [$array_2[$i][0], $array_2[$i][1], $array_2[$i][4], $array_2[$i][2], $array_2[$i][3], $array_2[$i][4]." ".$array_2[$i][2]." ".$array_2[$i][3],$array_2[$i][7], $array_2[$i][5], $array_2[$i][6]];
    array_push($personas, $datos_personas);
}

//ESTUDIANTE
$estudiantes = [["Cohorte", "Número estudiante", "Código plan", "Último logro", "Fecha logro", "Última toma de ramos"]];
for ($i = 1; $i < count($array_1); $i++){
    $datos_estudiante = [$array_1[$i][0],$array_1[$i][10],$array_1[$i][1],$array_1[$i][20],$array_1[$i][21],$array_1[$i][22]];
    array_push($estudiantes, $datos_estudiante);
}
$estudiantes = eliminar_repetidos(($estudiantes));

//PROFESOR
$profesores = [["RUN", "DV", "Contrato", "Jornada Diurno o Vespertino", "Dedicación", "Grado académico", "Jerarquía", "Cargo"]];
for ($i = 1; $i < count($array_2); $i++){
    if (str_contains($array_2[$i][14], "PROFESOR") ||
        str_contains($array_2[$i][14], "profesor") ||
        str_contains($array_2[$i][14], "Profesor") ||
        str_contains($array_2[$i][13], "PROFESOR") ||
        str_contains($array_2[$i][13], "profesor") ||
        str_contains($array_2[$i][13], "Profesor") 
    ){
        $datos_profesores = [$array_2[$i][0], $array_2[$i][1], $array_2[$i][8], "", $array_2[$i][11], $array_2[$i][12], $array_2[$i][13], $array_2[$i][14]];
        if (!empty($array_2[$i][9])){
            $datos_profesores[3] = "Diurno";
        }
        if (!empty($array_2[$i][10])){
            $datos_profesores[3] = "Vespertino";
        }
        if (!empty($array_2[$i][9]) && !empty($array_2[$i][10])){
            $datos_profesores[3] = "Ambos";
        }
        array_push($profesores, $datos_profesores);
    }
}

//ADMINISTRATIVO
$administrativos = [["RUN", "DV", "Cargo"]];
for ($i = 1; $i < count($array_2); $i++){
    if (trim($array_2[$i][14]) !== "" && !(
            str_contains($array_2[$i][14], "PROFESOR") || 
            str_contains($array_2[$i][14], "profesor") || 
            str_contains($array_2[$i][14], "Profesor")
        )){
        $datos_administrativos = [$array_2[$i][0], $array_2[$i][1], $array_2[$i][14]];
        array_push($administrativos, $datos_administrativos);
        }
    }

//Cursos
$cursos = [["Sigla", "Curso", "Secciones", "Nivel"]];
$nombres_seccion = []; // DICCIONARIO: Sigla -> [secciones]
for ($i = 1; $i < count($array_1); $i++){
    if (!isset($nombres_seccion[$array_1[$i][14]])){
        $nombres_seccion[$array_1[$i][14]] = [];
    }
    if (!in_array($array_1[$i][16], $nombres_seccion[$array_1[$i][14]])){
        $nombres_seccion[$array_1[$i][14]][] = $array_1[$i][16];
    }
}
for ($i = 1; $i < count($array_1); $i++){ // Vemos cursos de archivo 1
    $datos_cursos = [$array_1[$i][14], $array_1[$i][15], "", $array_1[$i][17]];
    array_push($cursos, $datos_cursos);
}
$cursos = eliminar_repetidos($cursos); // Sacamos siglas unicas
for ($i = 1; $i < count($cursos); $i++){ // Agregamos numero de secciones por sigla
    $cursos[$i][2] = count($nombres_seccion[$cursos[$i][0]]);
}
for ($i = 1; $i < count($cursos); $i++){ // Arreglamos no nulos
    if ($cursos[$i][0] == "x" || $cursos[$i][1] == "x"|| $cursos[$i][2] == "x"||$cursos[$i][3] == "x"){
        unset($cursos[$i]);
    }
}

//Notas
$notas = [["Número de estudiante", "Sigla", "Periodo", "Calificación", "Nota"]];
for ($i = 1; $i < count($array_1); $i++){
    $datos_nota = [$array_1[$i][10], $array_1[$i][14], $array_1[$i][13], $array_1[$i][18], $array_1[$i][19]];
    array_push($notas, $datos_nota);
}
$notas = eliminar_repetidos($notas);
for ($i = 1; $i < count($notas); $i++){
    if ($notas[$i][0] == "x" || $notas[$i][1] == "x" || $notas[$i][2] == "x" || $notas[$i][3] == "x" ){
        unset($notas[$i]);
    }
}

// ESCRIBIR ARCHIVOS
$archivo_personas = fopen("personas.txt", 'w');
if ($archivo_personas){
    foreach ($personas as $persona) {
        $linea = implode(' | ', $persona) . "\n";
        fwrite($archivo_personas, $linea);
    }
    fclose($archivo_personas);
}
$archivo_estudiantes = fopen("estudiantes.txt", 'w');
if ($archivo_estudiantes){
    foreach ($estudiantes as $estudiante) {
        $linea = implode(' | ', $estudiante) . "\n";
        fwrite($archivo_estudiantes, $linea);
    }
    fclose($archivo_estudiantes);
}
$archivo_profesores = fopen("profesores.txt", 'w');
if ($archivo_profesores){
    foreach ($profesores as $profesor) {
        $linea = implode(' | ', $profesor) . "\n";
        fwrite($archivo_profesores, $linea);
    }
    fclose($archivo_profesores);
}
$archivo_administrativos = fopen("administrativos.txt", 'w');
if ($archivo_administrativos){
    foreach ($administrativos as $administrativo) {
        $linea = implode(' | ', $administrativo) . "\n";
        fwrite($archivo_administrativos, $linea);
    }
    fclose($archivo_administrativos);
}

$archivo_notas = fopen("notas.txt", 'w');
if ($archivo_notas){
    foreach ($notas as $nota) {
        $linea = implode(' | ', $nota) . "\n";
        fwrite($archivo_notas, $linea);
    }
    fclose($archivo_notas);
}

$archivo_cursos = fopen("cursos.txt", 'w');
if ($archivo_cursos){
    foreach ($cursos as $curso) {
        $linea = implode(' | ', $curso) . "\n";
        fwrite($archivo_cursos, $linea);
    }
    fclose($archivo_cursos);
}

// MANEJO DE CONSOLA
if (isset($argv[1])){
    $run_ingresado = substr($argv[1], 0, -1);
}
else{
    echo "No ha especificado RUN\n";
    echo "\nFormato argumentos por consola: php bananer.php RUN(sin guión) CURSO PERIODO\n escribir siempre 3 argmentos como formato.";
    $run_ingresado = "";
}

if (isset($argv[2])){
    $curso_ingresado = $argv[2];
}
else{
    echo "No ha especificado curso\n";
    echo "\nFormato argumentos por consola: php bananer.php RUN(sin guión) CURSO PERIODO\n escribir siempre 3 argmentos como formato.";
    $curso_ingresado = "";
}
if (isset($argv[3])){
    $periodo_ingresado = $argv[3];
}
else{
    echo "\nNo ha especificado periodo";
    echo "\nFormato argumentos por consola: php bananer.php RUN(sin guión) CURSO PERIODO\n escribir siempre 3 argmentos como formato.";
    $periodo_ingresado = "";
}

// PRIMERA REQUEST
$data_alumno = [];
foreach($array_1 as $persona){
    if ($persona[4] == $run_ingresado){
        
    $datos_relevantes = [$persona[13], $persona[14], $persona[15], $persona[19], $persona[18]];
    array_push($data_alumno, $datos_relevantes);
        
    }
}
if (count($data_alumno) == 0){
    echo "No hay alumnos con ese RUN";
}
else{


    $data_alumno = eliminar_repetidos($data_alumno);
    $periodo_notas = [];
    $total_notas = [];
    $total_cursos = 0;
    echo "Cursos por alumno:\n\n";
    foreach($data_alumno as $alumno){
        list($periodo, $sigla, $curso, $nota, $calificacion) = $alumno;
        echo "Periodo: $periodo\n";
        echo "Sigla: $sigla\n";
        echo "Curso: $curso\n";
        echo "Nota: $nota\n";
        echo "Calificación: $calificacion\n\n";

        if ($nota !== "x") {
            $nota = (float) $nota;
            $periodo_notas[$periodo][] = $nota;
            $total_notas[] = $nota;
            $total_cursos++;
        }
    }
    echo "\nPromedios por periodo:\n";
    foreach ($periodo_notas as $periodo => $notas) {
        if (count($notas) != 0){
            $promedio = array_sum($notas) / count($notas);
            echo "Periodo: $periodo, Promedio: $promedio\n";
        }
        else{
            echo "Periodo: $periodo, Promedio: Sin notas\n";
        }
        
        
    }

    if ($total_cursos != 0){
        $promedio_general = array_sum($total_notas) / $total_cursos;
    echo "Promedio general: $promedio_general\n";
    }
    else {
        echo "El estudiante no tiene cursos aprobados\n";
    }
    
}

// SEGUNDO REQUEST

$estudiantes_curso_periodo = [["Cohorte", "Nombre completo", "RUN", "Número de estudiante"]];
for ($i = 1; $i < count($array_1); $i++){
    if ($array_1[$i][14] == $curso_ingresado && $array_1[$i][13] == $periodo_ingresado){
        $data = [$array_1[$i][0], $array_1[$i][9], $array_1[$i][4], $array_1[$i][10]];
        array_push($estudiantes_curso_periodo, $data);
    }
}
$estudiantes_curso_periodo = eliminar_repetidos($estudiantes_curso_periodo); // Elimina repetidos
if (count($estudiantes_curso_periodo) == 1){
    echo "\nFormato de curso y periodo erroneo, no existentes o no se curso ese curso en el periodo\n";
}
else {
    echo "\nEstudiantes que cursaron ".$curso_ingresado." en el ".$periodo_ingresado."\n";
    for ($i = 1; $i < count($estudiantes_curso_periodo); $i++){
        echo "\nCohorte: ".$estudiantes_curso_periodo[$i][0]."\n"."Nombre: ".$estudiantes_curso_periodo[$i][1]."\n"."RUN: ".$estudiantes_curso_periodo[$i][2]."\n"."Número: ".$estudiantes_curso_periodo[$i][3]."\n";
    }
}

// TIEMPO
$end = microtime(true);
$tiempo = $end - $start;
echo "\nTiempo: ".$tiempo." Segundos";
?>