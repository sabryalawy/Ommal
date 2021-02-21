<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfessionalPostDB
 *
 * @author Alawi
 */
class ProfessionalPostDB {

    public static function AddProfessionalPost($discription,$like,$dislike,$date,$Pid) {
        if (isset($_POST["name"])) {
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
            if ($db->query("INSERT INTO `ommal`.`professionalpost` (`discription`, `like`, `dislike`, `date`, `Pid`) VALUES ('$discription', '$like', '$dislike', '$date', '$Pid');")) {
                
            }
            
        }
    }

}
