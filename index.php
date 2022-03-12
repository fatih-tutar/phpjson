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

    // Extracting all datas (keys and values) from json file
    function space(){
        return "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br/>-----Extracting All Datas (keys and values) From Json File-----<br/>";
    $datas = json_decode(file_get_contents("object.json"));
    foreach($datas as $key => $value){
        if(is_string($value)){
            echo $key." : ".$value."<br/>";
        }elseif (is_numeric($value)) {
            echo $key . " : " . $value . "<br/>";
        }elseif(is_array($value)){
            $a_variable = $value;
            foreach ($a_variable as $a_key => $a_value) {
                if($a_key == 0){
                    echo $key . " :<br/>". space() . $a_value . "<br/>";
                }else{
                    echo space() . $a_value . "<br/>";
                }              
            }
        }elseif(is_object($value)){
            $o_variable = $value;
            $i = 0;
            foreach ($o_variable as $o_key => $o_value) {
                if($i == 0){
                    echo $key . " :<br/>" .space().$o_key." : ". $o_value . "<br/>";
                }else{
                    echo space() .$o_key." : ". $o_value . "<br/>";
                }      
                $i++;          
            }
        }
    }
    echo "<br/># We can do this with shorter code by converting everything to array<br/>";
    echo "<br/>-----Extracting All Datas (keys and values) WITH ARRAY CONVERTING From Json File -----<br/>";
    $arrayDatas = json_decode(file_get_contents("object.json"),true);
    function readJson($text){
        foreach ($text as $key => $value) {
            if(!is_array($value)){
                echo $key." : ".$value."<br/>";
            }else{
                readJson($value);
            }
        }
    }
    readJson($arrayDatas);
?>