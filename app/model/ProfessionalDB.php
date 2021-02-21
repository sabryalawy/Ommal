<?php

require_once("Customer.php");
require_once("Task.php");

class ProfessionalDB {

    //add customer
    public static function add($professional) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("INSERT INTO `ommal`.`professional` (`userName`, `LastName`, `FirstName`, `passwd`, `phoneNum`, `gender`, `loginStatus`, `lastLogin`, `email`,`profession`,`address`) VALUES ('$professional->userName', '$professional->lName', '$professional->fName', '$professional->password', '$professional->phoneNum', '$professional->gender', '$professional->loginStatus', '$professional->lastLogin', '$professional->email','$professional->profession','$professional->address');")) {
            echo "$professional->userName has been added";
        } else {
            echo $db->error;
        }
    }

    //delete customer
    public static function deleteByID($id) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("delete from professional where id=$id") === TRUE) {
            echo "$id has been deleted";
        } else {
            echo "it cannt be deleted";
        }
    }

    public static function deleteByUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("delete from professional where userName='$userName'") === TRUE) {
            echo "$userName has been deleted";
        } else {
            echo $db->error;
        }
    }

    public static function getProfessionalByID($id) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $professional = new Professional;

        $rez = $db->query("select * from professional where id=$id");
        $row = $rez->fetch_assoc();

        $professional->id = $row["id"];
        $professional->userName = $row["userName"];
        $professional->fName = $row["FirstName"];
        $professional->lName = $row["LastName"];
        $professional->password = $row["passwd"];
        $professional->phoneNum = $row["phoneNum"];
        $professional->gender = $row["gender"];
        $professional->loginStatus = $row["loginStatus"];
        $professional->lastLogin = $row["lastLogin"];
        $professional->email = $row["email"];
        $professional->profession = $row["profession"];
        $professional->address = $row["address"];
        echo json_encode($professional);
    }

    public static function getProfessionalByUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $professional = new Professional;

        $rez = $db->query("select * from professional where userName='$userName'");
        $row = $rez->fetch_assoc();

        $professional->id = $row["id"];
        $professional->userName = $row["userName"];
        $professional->fName = $row["FirstName"];
        $professional->lName = $row["LastName"];
        $professional->password = $row["passwd"];
        $professional->phoneNum = $row["phoneNum"];
        $professional->gender = $row["gender"];
        $professional->loginStatus = $row["loginStatus"];
        $professional->lastLogin = $row["lastLogin"];
        $professional->email = $row["email"];
        $professional->profession = $row["profession"];
        $professional->address = $row["address"];
        echo json_encode($professional);
        return json_encode($professional);
    }

    public static function checkUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from professional where userName='" . $userName . "'");
        $row = $rez->fetch_assoc();
        // var_dump($row);
        if (isset($row["userName"])) {
            return true;
        }
        return false;
    }

    public static function saveProfileImage($id) {
        if (isset($_POST["pimagep"])) {
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
            $image = $_POST["pimagep"];
            if ($db->query("INSERT INTO `ommal`.`imageprofilep` (`image`, `Pid`) VALUES ('$image',$id );")) {
                echo 'sucess insertion';
            } else {
                echo ProfessionalDB::UpDateProfileImage($id);
            }
        } else {
            echo "no file attached";
        }
    }

    public static function getProfileImage($id) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from imageprofilep where Pid='$id'");
        $row = $rez->fetch_assoc();
        echo json_encode($row);
    }

    public static function UpDateProfileImage($id) {
        if (isset($_POST["pimagep"])) {
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
            $image = $_POST["pimagep"];
            if ($db->query("UPDATE `ommal`.`imageprofilep` SET `image` = '$image' WHERE (`Pid` = '$id');")) {
                echo 'sucess upDate';
            } else {
                echo "try agan later";
            }
        } else {
            echo "no file attached";
        }
    }

    public static function getPostForProfessinalWall($regon) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $result = $db->query("call getPostForProfessinalwall('$regon'," . $_SESSION["pWallOffset"] . ")");

        $task = array();
        while ($rows = $result->fetch_assoc()) {
            $temptask = new Task;
            $temptask->id = $rows["id"];
            $temptask->name = $rows["userName"];
            $temptask->discription = $rows["discription"];
            $temptask->profisson = $rows["profession"];
            $temptask->address = $rows["address"];
            $temptask->price = $rows["totalprice"];
            $temptask->photo = $rows["taskimage"];
            $temptask->locationX = $rows["locationx"];
            $temptask->locationY = $rows["locationy"];
            $temptask->date = $rows["date"];
            array_push($task, $temptask);
            $_SESSION["pWallOffset"] = $temptask->id - 1;
        }

        echo json_encode($task);
    }

    public static function returnProfessionalByUserName($userName) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $professional = new Professional;

        $rez = $db->query("select * from professional where userName='$userName'");
        $row = $rez->fetch_assoc();

        $professional->id = $row["id"];
        $professional->userName = $row["userName"];
        $professional->fName = $row["FirstName"];
        $professional->lName = $row["LastName"];
        $professional->password = $row["passwd"];
        $professional->phoneNum = $row["phoneNum"];
        $professional->gender = $row["gender"];
        $professional->loginStatus = $row["loginStatus"];
        $professional->lastLogin = $row["lastLogin"];
        $professional->email = $row["email"];
        $professional->profession = $row["profession"];
        $professional->address = $row["address"];
        return json_encode($professional);
    }

    public static function getPostForProfessionalProfilePosts($id) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("call getProfessonalMyPosts($id," . $_SESSION["pProfileOffset"] . ");");
        $posts = array();
        while ($rows = $rez->fetch_assoc()) {


            $tempObject =new stdClass();
            $tempObject->id = $rows["id"];
            $tempObject->name = $rows["name"];
            $tempObject->date = $rows["date"];
            $tempObject->discription = $rows["discription"];
            $tempObject->imageWork = $rows["imageWork"];

            array_push($posts, $tempObject);
            $_SESSION["pProfileOffset"] = $rows["id"] - 1;
        }

        echo json_encode($posts);
    }
    

}
