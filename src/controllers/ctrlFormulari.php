<?php

function ctrlFormulari($request, $response, $container){

    $response->setTemplate("formulari.html");

    return $response;
    
}