<?php

require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/Task.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/TaskDB.php';

class taskController extends Controller {

    public function getTaskById(int $id = 0) {
        TaskDB::getTaskById($id);
    }

    public function getTasksForCustomerByUserName($userName) {
        TaskDB::getTasksForCustomerByUserName($userName);
    }

    public function addTask() {
        
        $locationx = $_POST["locationx"];
        $locationy = $_POST["locationy"];
        $totalprice = $_POST["totalpreice"];
        $discription = $_POST["discription"];
        $profession = $_POST["profisson"];
        $photo = $_POST["photo"];
        $Cid = $_POST["Cid"];
        $date=$_POST["date"];
        $address=$_POST["address"];
        TaskDB::addTask($totalprice, $locationx, $locationy, $photo, $Cid, $discription, "f", $profession, $address, $date);
    }

    public function addTaskByUserName() {

        $locationx = $_POST["locationX"];
        $locationy = $_POST["locationY"];
        $totalprice = $_POST["totalpreice"];
        $discription = $_POST["discription"];
        $profession = $_POST["profisson"];
        $photo = $_POST["photo"];
        $date=$_POST["date"];
        $address=$_POST["address"];
        
        $userName=$_POST["name"];
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where customer.userName='$userName'");
        $row = $rez->fetch_assoc();

        $Cid = $row["id"];

        TaskDB::addTask($totalprice, $locationx, $locationy, $photo, $Cid, $discription, "f", $profession, $address, $date);
    }

    public function upDatePricePerM($id) {
        TaskDB::upDatePricePerM($id);
    }

    public function upDateLocation($locationx, $locationy) {
        TaskDB::upDateLocation($param);
    }

    public function upDateTotalPrice($param) {
        TaskDB::upDateTotalPrice($param);
    }

    public function upDateCid($param) {
        TaskDB::upDateCid($param);
    }

    public function upDateDiscription($param) {
        TaskDB::upDateDiscription($param);
    }

}
