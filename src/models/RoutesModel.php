<?php
namespace Mbogi\Models;

class RoutesModel{

    var $validRoutes=array();

    public function __construct(){

        $this->validRoutes=$this->getValidRoutes();

    }//

    private function getValidRoutes(){

        $this->validRoutes=array("mine","others");

    }//

    public function getDefaultRoute(){

        if(count($this->validRoutes)>0){
            return $this->validRoutes[0];
        }//
        else{
            return "mine";
        }//

    }//

    public function isValidRoute($checkString){

        return in_array($checkString,$this->validRoutes);

    }//

}//