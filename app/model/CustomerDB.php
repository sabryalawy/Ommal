<?php

require_once("Customer.php");

class CustomerDB {

    //add customer
    public static function add($customer) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("INSERT INTO `ommal`.`customer` (`userName`, `LastName`, `FirstName`, `passwd`, `phoneNum`, `gender`, `loginStatus`, `lastLogin`, `email`) VALUES ('$customer->userName', '$customer->lName', '$customer->fName', '$customer->password', '$customer->phoneNum', '$customer->gender', '$customer->loginStatus', '$customer->lastLogin', '$customer->email');")) {
            echo "$customer->userName has been added";
        } else {
            echo $db->error;
        }
    }

    //delete customer
    public static function deleteByID($id) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("delete from customer where id=$id") === TRUE) {
            echo "$id has been deleted";
        } else {
            echo "it cannt be deleted";
        }
    }

    public static function deleteByUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("delete from customer where customer.userName='$userName'") === TRUE) {
            echo "$userName has been deleted";
        } else {
            echo $db->error;
        }
    }

    public static function getCustomerByID($id) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $custommer = new Customer;

        $rez = $db->query("select * from customer where customer.id=$id");
        $row = $rez->fetch_assoc();

        $custommer->id = $row["id"];
        $custommer->userName = $row["userName"];
        $custommer->fName = $row["FirstName"];
        $custommer->lName = $row["LastName"];
        $custommer->password = $row["passwd"];
        $custommer->phoneNum = $row["phoneNum"];
        $custommer->gender = $row["gender"];
        $custommer->loginStatus = $row["loginStatus"];
        $custommer->lastLogin = $row["lastLogin"];
        $custommer->email = $row["email"];
        echo json_encode($custommer);
        return $custommer;
    }

    public static function getCustomerByUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $custommer = new Customer;

        $rez = $db->query("select * from customer where customer.userName='$userName'");
        $row = $rez->fetch_assoc();

        $custommer->id = $row["id"];
        $custommer->userName = $row["userName"];
        $custommer->fName = $row["FirstName"];
        $custommer->lName = $row["LastName"];
        $custommer->password = $row["passwd"];
        $custommer->phoneNum = $row["phoneNum"];
        $custommer->gender = $row["gender"];
        $custommer->loginStatus = $row["loginStatus"];
        $custommer->lastLogin = $row["lastLogin"];
        $custommer->email = $row["email"];
        echo json_encode($custommer);
    }

    public static function getAll() {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer ");

        $custommer[] = new Customer;
        while (($row = $rez->fetch_assoc()) != null) {
            array_push($custommer, $row);
        }

        echo json_encode($custommer);
    }

    public static function checkUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where userName = '" . $userName . "';");

        $row;
        while (($row = $rez->fetch_assoc()) != null) {

            if (isset($row["userName"])) {

                return true;
            } else {
                return false;
            }
        }
    }

    public static function saveProfileImage($id) {
        if (isset($_POST["pimagec"])) {
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
            $image = $_POST["pimagec"];
            if ($db->query("INSERT INTO `ommal`.`imageprofilec` (`image`, `Cid`) VALUES ('$image',$id );")) {
                echo 'sucess insertion';
            } else {
                echo CustomerDB::UpDateProfileImage($id);
            }
        } else {
            echo "no file attached";
        }
    }
    
    public static function getProfileImageByUserName($userName) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where userName='$userName'");
        $row = $rez->fetch_assoc();
        CustomerDB::getProfileImage($row["id"]);
    }

    public static function getProfileImage($id) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from imageprofilec where Cid='$id'");
        $row = $rez->fetch_assoc();
        echo json_encode($row);
    }

    public static function UpDateProfileImage($id) {
        if (isset($_POST["pimagec"])) {
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
            $image = $_POST["pimagec"];
            if ($db->query("UPDATE `ommal`.`imageprofilec` SET `image` = '$image' WHERE (`Cid` = '$id');")) {
                echo 'sucess upDate';
            } else {
                echo "try agan later";
            }
        } else {
            echo "no file attached";
        }
    }
    public static function returnCustomerByUserName($userName) {
        require_once("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $custommer = new Customer;

        $rez = $db->query("select * from customer where customer.userName='$userName'");
        $row = $rez->fetch_assoc();

        $custommer->id = $row["id"];
        $custommer->userName = $row["userName"];
        $custommer->fName = $row["FirstName"];
        $custommer->lName = $row["LastName"];
        $custommer->password = $row["passwd"];
        $custommer->phoneNum = $row["phoneNum"];
        $custommer->gender = $row["gender"];
        $custommer->loginStatus = $row["loginStatus"];
        $custommer->lastLogin = $row["lastLogin"];
        $custommer->email = $row["email"];
        return json_encode($custommer);
    }
    

}
