<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

       $name = $_POST['inputName'];
       $dir  = $_POST['inputDire'];
       $lat  = $_POST['inputLatitud'];
       $lon  = $_POST['inputLongitud'];
       $tipo = $_POST['type'];
       $pri  = $_POST['pry'];
        
       
       include 'mongoGPS.php';
    
    $geopoint = $db->geopoint;
    
    $insert = array("name" => $name, "latitud" => $lat, "longitud" => $lon,
                    "direction"=>$dir, "type"=>$tipo, "priority"=>$pri );
    
    $geopoint->insert($insert);
    
    
    $cursor = $geopoint->find();
                foreach ($cursor as $doc) {
                    var_dump($doc);
                }
        



?>

