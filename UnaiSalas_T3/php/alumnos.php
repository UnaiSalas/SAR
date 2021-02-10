<?php
    $alumnos = simplexml_load_file("../xml/alumnos.xml") or die("Failed to load");
    $valor = $_POST['lista'];
    $notaM = $_POST['Matematicas'];
    $notaL = $_POST['Lengua'];
    $notaE = $_POST['Euskera'];
    $notaG = $_POST['Gizarte'];
    for($i=0; $i<=6; $i++){
        if($valor==$i){
            $var=$i;
        }
    }
    $var=$var-1;
    for($i=0; $i<=10; $i++){
        if($notaL==$i){
            $varL=$i;
        }
    }
    for($i=0; $i<=10; $i++){
        if($notaM==$i){
            $varM=$i;
        }
    }
    for($i=0; $i<=10; $i++){
        if($notaE==$i){
            $varE=$i;
        }
    }
    for($i=0; $i<=10; $i++){
        if($notaG==$i){
            $varG=$i;
        }
    }
    $alumnos->alumno[$var]->Lengua = $varL;
    $alumnos->alumno[$var]->Matematica = $varM;
    $alumnos->alumno[$var]->Euskera = $varE;
    $alumnos->alumno[$var]->Gizarte = $varG;
    $output = $alumnos->asXML();
    file_put_contents('../xml/alumnos.xml', $output);
    header( "Location: ../zona_usuarios.html");
    ?>
