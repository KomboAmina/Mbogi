<?php
namespace Mbogi\Core;

class Mbogi{

    var $route="";

    var $model=null;

    var $controller=null;

    var $view=null;

    public function __construct(){

        $this->route=$this->getRoute();

        var_dump($this->route);

    }//

    private function getRoute(){

        $route="others";

        return "route";

    }//

}//