<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cOrderDB
 *
 * @author Alawi
 */
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/cOrder.php';

class cOrderDB
{

    public static function addOrderFromProf($taskid, $pid, $isfinished, $price, $numberOfworker, $detailes, $ending, $starting, $agreementprofessional)
    {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("INSERT INTO `ommal`.`corder` (`taskid`, `pid`, `isfinished`, `price`, `numberofworker`, `detales`, `endingdate`, `startingdate`, `agreementprofessional`) VALUES ('$taskid', '$pid', '$isfinished', '$price', '$numberOfworker', '$detailes', '$ending', '$starting', '$agreementprofessional');")) {
            return "done";
        } else {
            return "try again";
        }
    }

    public static function addOrderFromCust($taskid, $pid, $isfinished, $price, $numberOfworker, $detailes, $ending, $starting, $agreementcustomer)
    {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("INSERT INTO `ommal`.`corder` (`taskid`, `pid`, `isfinished`, `price`, `numberofworker`, `detales`, `endingdate`, `startingdate`, `agreementprofessional`) VALUES ('$taskid', '$pid', '$isfinished', '$price', '$numberOfworker', '$detailes', '$ending', '$starting', '$agreementcustomer');")) {
            return "done";
        } else {
            return "try again";
        }
    }

    public static function getOrder($id)
    {

        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $order = $db->query("select * from corder where id = $id");
        $rez = $order->fetch_assoc();
        return json_encode($rez);
    }
}
