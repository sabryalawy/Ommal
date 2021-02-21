<?php

require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/CustomerDB.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/ProfessionalDB.php';

class Check extends Controller
{
    public static function checkUserName($userName){
        $temp = false;
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez=$db->query("select * from professional where userName='".$userName."'");
        $row=$rez->fetch_assoc();
        // var_dump($row);
        if (isset($row["userName"])){
            $temp= true;
        }
        $rez=$db->query("select * from customer where userName = '".$userName."';");
        
        $row;
        while(($row=$rez->fetch_assoc())!=null){

            if (isset($row["userName"])){
                
                $temp= true;
            }
        }
        echo $temp;
    }
    

}
