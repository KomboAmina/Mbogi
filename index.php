<?php
defined('DS') OR define('DS',DIRECTORY_SEPARATOR);

$errors=array();

$incFiles=array("src".DS."config".DS."config.php",
                "vendor".DS."autoload.php");

foreach($incFiles as $incFile){

    if(file_exists($incFile)){

        include $incFile;

    }//
    else{

        $errors[]="file not found: ".$incFile;

    }//

}//

if(count($errors)>0){

    echo "<h1>Errors:</h1><ol>";

    foreach($errors as $error){

        echo "<li>".$error."</li>";

    }//

    echo "</ol>";

}//
else{

    $mbogi=new Mbogi\Core\Mbogi();

}//