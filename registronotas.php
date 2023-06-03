<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="estilo.css" />
    <title>REGISTRO DE NOTAS</title>
</head>
<body>
    <div class="feedback-card">
        <div class="feedback-header">
        REGISTRO DE NOTAS
        </div>
        <form action="", method="POST", class="feedback-body" required min="0" max="100">
            MATEMATICA I: <input type="number", name="mate1" required min="0" max="100"> 
            LENGUAJE Y COMUNICACIÓN: <input type="number", name="lenycom" required min="0" max="100">
            HISTORIA SOCIO-ECONOMICA: <input type="number", name="historia" required min="0" max="100">
            INGLÉS I: <input type="number", name="ingles" required min="0" max="100">
            FORMACIÓN CULTURAL: <input type="number", name="formcultu" required min="0" max="100">
            EDUCACIÓN FÍSICA I: <input type="number", name="educfisica" required min="0" max="100">
            METODOLOGÍA: <input type="number", name="metodologia" required min="0" max="100">
            FORMACIÓN ECOLÓGICA: <input type="number", name="formeco" required min="0" max="100"> <br>
            <input type="submit", name="submit">
        </form>
    </div>

    <br>
    <br>

    <div class="feedback-card">
    <div class="feedback-header">
        Materias a cursar en proximo semestre
    </div> 
    <div class="feedback-body">  
    <?php
$negativo = 0;
$positivo = 0;
$cadenaPrelaciones =" ";
$ucPrelaciones = 0;
$ucProxTrimestre = 0;

function promedio($nota){
    $aprobo;
    if ($nota >= 50){
        $aprobo = true;
    }else {
        $aprobo = false;
    }
    return $aprobo;
}

if (isset($_POST['submit'])){

    if(promedio($_POST['mate1']) == true){
        $positivo += 3;
        $ucPrelaciones += 3;
        $cadenaPrelaciones .="Matematica II.<br/>";
    }else {
        $negativo += 3;
        $ucProxTrimestre += 3;
        echo "Matematica I.<br/>";
    }

    if(promedio($_POST['lenycom']) == true){
        $positivo += 2;
    }else {
        $negativo += 2;
        $ucProxTrimestre += 2;
        echo "Lenguaje y Comunicación.<br/>";
    }

    if(promedio($_POST['historia']) == true){
        $positivo += 2;
    }else {
        $negativo += 2;
        $ucProxTrimestre += 2;
        echo "Historia Socio-Economica de Venezuela.<br/>";
    }
    if(promedio($_POST['ingles']) == true){
        $positivo += 2;
        $ucPrelaciones += 2;
        $cadenaPrelaciones .="Inglés II.<br/>";
    }else {
        $negativo += 2;
        $ucProxTrimestre += 2;
        echo "Inglés I.<br/>";
    }
    if(promedio($_POST['formcultu']) == true){
        $positivo += 2;
    }else {
        $negativo += 2;
        $ucProxTrimestre += 2;
        echo "Formación Cultural.<br/>";
    }
    if(promedio($_POST['educfisica']) == true){
        $positivo += 2;
        $ucPrelaciones += 1;
        $cadenaPrelaciones .="Educación Física II.<br/>";
    }else {
        $negativo += 2;
        $ucProxTrimestre += 2;
        echo "Educación Física I.<br/>";
    }
    if(promedio($_POST['metodologia']) == true){
        $positivo += 2;
    }else {
        $negativo += 2;
        $ucProxTrimestre += 2;
        echo "Metodología.<br/>";
    }
    if(promedio($_POST['formeco']) == true){
        $positivo += 1;
    }else {
        $negativo += 1;
        $ucProxTrimestre += 1;
        echo "Formación ecologíca.<br/>";
    }

    
    if ($positivo > $negativo){
        echo $cadenaPrelaciones;
        echo "Introducción a Informática y Electrónica.<br/>";
        echo "Contabilidad I.<br/>";
        echo "Lógica de Programación.<br/>";
        echo "Fundamentos Teóricos de la computación.<br/>";
        echo "Introducción al derecho.<br/>";
        echo "<br/>U.C de Materias aprobadas: ". $positivo. ".<br/>";
        echo "U.C. de Materias reprobadas: ". $negativo. ".<br/>";
        echo "U.C. de Materias del 2do Trimestre: ". $ucProxTrimestre + $ucPrelaciones + 11 .".<br/>";
    }else{
        echo "<br/>U.C de Materias aprobadas: ". $positivo.".<br/>";
        echo "U.C. de Materias reprobadas: ". $negativo.".<br/>";
        echo "U.C. de Materias del 2do Trimestre: ". $ucProxTrimestre.".<br/>";       
    }
 }
?>
    </div>
    </div>
</body>
</html>