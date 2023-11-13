<?php

function ctrlseeInscripcio($request, $response, $container){

    $identified = $request->get("SESSION", "identified");


    $userModel = $container->users();
    $usuaris = $userModel->getAllUsers();
    $response->set("usuaris",$usuaris);
    $response->set("identified",$identified);

    $response->setTemplate("inscripcions.php");
    return $response;
    
}