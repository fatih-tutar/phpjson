<?php
    $ages = array("Fatih"=>28,"Zehra"=>33,"Davut"=>60,"Ayse"=>55); //This is ARRAY
    $agesJsonObject = json_encode($ages); // This is JSON OBJECT
    echo $agesJsonObject."<br/>";
    
    $languages = array("PHP", "NODEJS", "REACT JS", "ANGULAR"); // This is ARRAY
    $languagesJsonArray = json_encode($languages); // This is JSON ARRAY
    echo $languagesJsonArray."<br/>";

    $jsonObject = '{"Fatih":28,"Ayse":55,"Davut":60,"Zehra":33}'; // This is JSON OBJECT
    $object = json_decode($jsonObject); // This is OBJECT
    echo $object->Fatih.'<br/>';

    // We converted json object to object, you can also convert json object to array
    $array = json_decode($jsonObject,true); // This is ARRAY
    echo $array["Ayse"].'<br/>';

    // Objects can also be looped with foreach
    foreach($object as $key => $value){
        echo $key." : ".$value."<br/>";
    }
?>