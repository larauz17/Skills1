<?php

function ctrladduser($request, $response, $container){

    $nom = $request->get(INPUT_POST, "nom");
    $cognom = $request->get(INPUT_POST, "cognom");
    $borndate = $request->get(INPUT_POST, "borndate");
    $adress = $request->get(INPUT_POST, "adress");
    $resguard = $request->get(INPUT_POST, "resguard");
    


$userModel = $container->users();
$id = $userModel->adduser($nom, $cognom,$borndate,$adress);



$rutaNuevaCarpeta = './resguard/';
    $rutaCompleta = $rutaNuevaCarpeta.$id."/";
    if (mkdir($rutaCompleta, 0750, true)) {

        
        $nombreArchivoOriginal = $_FILES["resguard"]["name"];
        $extension = pathinfo($nombreArchivoOriginal, PATHINFO_EXTENSION);

            $ruta = $rutaCompleta . $nom. "." . $extension;
            $rutaTemporal = $_FILES["resguard"]["tmp_name"];

            move_uploaded_file($rutaTemporal, $ruta);
        
    
}
$response->set("id",$id);
$response->set("nom",$nom);
$response->set("cognom",$cognom);
$response->set("datanaix",$borndate);
$response->set("adreca",$adress);

    $response->setTemplate("confirmacio.php");

    return $response;
    
}
