<?php

function ctrlpass($request, $response, $container){

    $response->setTemplate("pass.php");

    return $response;
    
}