<?php

function ctrlformulari($request, $response, $container){

    $response->setTemplate("formulari.html");

    return $response;
    
}