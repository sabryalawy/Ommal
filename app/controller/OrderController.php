<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author Alawi
 */
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/cOrderDB.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/ProfessionalDB.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/Professional.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/Customer.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/CustomerDB.php';



class OrderController extends Controller
{

    public function addOrderFromProf($userNamepro)
    {
        //$taskid, $pid, $isfinished, $price, $numberOfworker, $detailes, $ending, $starting, $agreementprofessional

        if (isset($_POST["taskid"]) && isset($_POST["isfinished"]) && isset($_POST["price"]) && isset($_POST["numberOfworker"]) && isset($_POST["detailes"]) && isset($_POST["ending"]) && isset($_POST["agreementprofessional"]) && isset($_POST["starting"])) {
            $object = ProfessionalDB::returnProfessionalByUserName($userNamepro);
            $rez = json_decode($object);

            echo cOrderDB::addOrderFromProf($_POST["taskid"], $rez->id, $_POST["isfinished"], $_POST["price"], $_POST["numberOfworker"], $_POST["detailes"], $_POST["ending"], $_POST["starting"], $_POST["agreementprofessional"]);
        } else {
            echo "something gose wronge";
        }
    }

    public function addOrderFromCust($userNamecus)
    {
        //$taskid, $pid, $isfinished, $price, $numberOfworker, $detailes, $ending, $starting, $agreementprofessional

        if (isset($_POST["taskid"]) && isset($_POST["isfinished"]) && isset($_POST["price"]) && isset($_POST["numberOfworker"]) && isset($_POST["detailes"]) && isset($_POST["ending"]) && isset($_POST["agreementprofessional"]) && isset($_POST["starting"])) {
            $object = CustomerDB::returnCustomerByUserName($userNamecus);
            $rez = json_decode($object);
            echo cOrderDB::addOrderFromProf($_POST["taskid"], $rez->id, $_POST["isfinished"], $_POST["price"], $_POST["numberOfworker"], $_POST["detailes"], $_POST["ending"], $_POST["starting"], $_POST["agreementprofessional"]);
        } else {
            echo "something gose wronge";
        }
    }
    public function getOrder($id)
    {
        echo cOrderDB::getOrder($id);
    }
    
    
}
