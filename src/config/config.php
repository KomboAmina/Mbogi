<?php
$configFiles=array("basic.php","database.php");

foreach($configFiles as $configFile){

    if(file_exists($configFile)){

        require_once($configFile);

    }//

}//