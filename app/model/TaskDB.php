<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TaskDB
 *
 * @author Alawi
 */
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/CustomerDB.php';

class TaskDB {

    public static function getTaskById(int $id = 0) {
        if ($id == 0) {
            echo 'ID NEEDED';
        } else {
            require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
            $rez = $db->query("select * from Task where id = $id");
            $row = $rez->fetch_assoc();
            if ($row == NULL) {
                echo 'No Result';
            } else {
                echo json_encode($row);
            }
        }
    }

    public static function addTask($totalprice, $locationx, $locationy, $photo, $Cid, $discription, $taken, $profession, $address, $date) {

        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        if ($db->query("INSERT INTO `ommal`.`task` (`locationx`, `locationy`, `totalprice`, `Cid`, `discription`, `taken`, `profession`, `address`, `date`, `taskimage`) VALUES ('$locationx', '$locationy', '$totalprice', '$Cid', '$discription', '$taken', '$profession', '$address', '$date','$photo');")) {
            echo "Task $locationx,$locationy Add in ";
        } else {
            echo 'something gose wrong';
        }
    }

    public static function getTasksForCustomerByUserName($userName) {
        require_once("C://xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where customer.userName='$userName'");
        $row = $rez->fetch_assoc();

        $rez = $db->query("select * from task where Cid='" . $row["id"] . "'");
        $row;
        $tasks[] = new Task;
        while (($row = $rez->fetch_assoc()) != null) {
            array_push($tasks, $row);
        }
        echo json_encode($tasks);
    }

    public static function upDatePricePerM($id) {
        require_once("C://xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if (isset($_POST["uPricePerM"])) {
            $uPricePerM = $_POST["uPricePerM"];
            if ($db->query("UPDATE `ommal`.`Task` SET `priceperm` = '$uPricePerM' WHERE (`id` = '$id');")) {
                echo 'upDate Done';
            } else {
                echo 'something went wrong';
            }
        } else {
            echo 'uPricePerM is missing';
        }
    }

    public static function upDateLocation($id) {
        require_once("C://xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if (isset($_POST["uLocation"])) {
            $uLocationx = $_POST["uLocationx"];
            $uLocationy = $_POST["uLocationy"];
            if ($db->query("UPDATE `ommal`.`Task` SET `locationx` = '$uLocationx' `locationy` = '$uLocationy' WHERE (`id` = '$id');")) {
                echo 'upDate Done';
            } else {
                echo 'something went wrong';
            }
        } else {
            echo 'uLocation is missing';
        }
    }

    public static function upDateTotalPrice($param) {
        require_once("C://xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if (isset($_POST["uTotalPrice"])) {
            $uTotalPrice = $_POST["uTotalPrice"];
            if ($db->query("UPDATE `ommal`.`Task` SET `totalprice` = '$uTotalPrice' WHERE (`id` = '$param');")) {
                echo 'upDate Done';
            } else {
                echo 'something went wrong';
            }
        } else {
            echo 'uTotalPrice is missing';
        }
    }

    public static function upDateCid($param) {
        require_once("C://xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if (isset($_POST["uCId"])) {
            $uCId = $_POST["uCId"];
            if ($db->query("UPDATE `ommal`.`Task` SET `Cid` = '$uCId' WHERE (`id` = '$param');")) {
                echo 'upDate Done';
            } else {
                echo 'something went wrong';
            }
        } else {
            echo 'uCId is missing';
        }
    }

    public static function upDateDiscription($param) {
        require_once("C://xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if (isset($_POST["uDisc"])) {
            $uDisc = $_POST["uDisc"];
            if ($db->query("UPDATE `ommal`.`Task` SET `discription` = '$uDisc' WHERE (`id` = '$param');")) {
                echo 'upDate Done';
            } else {
                echo 'something went wrong';
            }
        } else {
            echo 'uDisc is missing';
        }
    }

}
