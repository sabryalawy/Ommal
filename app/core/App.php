<?php

class App{
    protected $controller="home";
    protected $method="index";
    protected $var=[];
    
    public function __construct()
    {
        //fillUp var
        //raouting   
        if (isset($_SERVER["PATH_INFO"])) {
            $pathUrl=explode("/", ltrim($_SERVER["PATH_INFO"],"/"));
        }
           

        
       // var_dump($pathUrl);
        if (isset($pathUrl[0])&&$pathUrl[0]!="") {
            $this->controller=$pathUrl[0];
            array_shift($pathUrl);
            require_once('C:/xampp/htdocs/OmmalPHPMVC/app\controller/' .$this->controller.'.php');
            
            if (isset($pathUrl[0])) {
                $this->method=$pathUrl[0];
                array_shift($pathUrl);
                $this->var=$pathUrl;
                call_user_func_array([$this->controller,$this->method],$this->var);
            }else{
            //echo json_encode($this->controller);
            call_user_func_array([$this->controller,$this->method],$this->var);
            }
        }else{
            
            require_once('C:/xampp/htdocs/OmmalPHPMVC/app\controller/' .$this->controller.'.php');

            call_user_func_array([$this->controller,$this->method],$this->var);
        }
        
    }
}