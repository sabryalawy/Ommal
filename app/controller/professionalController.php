<?php

require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/Professional.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/ProfessionalDB.php';

class professionalController extends Controller {

    //add professional
    public function add() {
        $professional = new Professional;
        if (isset($_POST["userName"]) && isset($_POST["fName"]) && isset($_POST["lName"]) && isset($_POST["password"]) && isset($_POST["phoneNum"]) && isset($_POST["gender"]) && isset($_POST["loginStatus"]) && isset($_POST["lastLogin"]) && isset($_POST["email"])) {
            $professional->userName = $_POST["userName"];
            $professional->fName = $_POST["fName"];
            $professional->lName = $_POST["lName"];
            $professional->password = $_POST["password"];
            $professional->phoneNum = $_POST["phoneNum"];
            $professional->gender = $_POST["gender"];
            $professional->loginStatus = $_POST["loginStatus"];
            $professional->lastLogin = $_POST["lastLogin"];
            $professional->email = $_POST["email"];
            $professional->profession = $_POST["profession"];
            $professional->address = $_POST["address"];
            ProfessionalDB::add($professional);
        } else {
            echo "you forgot a param";
        }
    }

    //delete professional
    public function deleteByID($id) {
        ProfessionalDB::deleteByID($id);
    }

    public function deleteByUserName($userName) {
        ProfessionalDB::deleteByUserName($userName);
    }

    //update customer 
    //getcustome(user name)
    public function getProfessionalByUserName($userName) {
        ProfessionalDB::getProfessionalByUserName($userName);
    }

    public function getProfessionalByID($id) {
        ProfessionalDB::getProfessionalByID($id);
    }

    public function upDateByUserNameUserName($userNameOld) {
        if (isset($_POST["userNameNew"])) {
            $userNameNew = $_POST["userNameNew"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");



            $rez = $db->query("update professional set userName='$userNameNew' where userName='$userNameOld'");
            echo "$userNameOld has been updated to $userNameNew";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameFirstName($userName) {
        if (isset($_POST["uFirstName"])) {
            $uFirstName = $_POST["uFirstName"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set FirstName='$uFirstName' where professional.userName='$userName'");
            echo "$userName has been updated to $uFirstName";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameLastName($userName) {
        if (isset($_POST["uLastName"])) {
            $uLastName = $_POST["uLastName"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set LastName='$uLastName' where professional.userName='$userName'");
            echo "$userName has been updated to $uLastName";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNamePassword($userName) {
        if (isset($_POST["uPassword"])) {
            $uPassword = $_POST["uPassword"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set passwd='$uPassword' where professional.userName='$userName'");
            echo "$userName has been updated to $uPassword";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNamePhoneNum($userName) {
        if (isset($_POST["uPhoneNum"])) {
            $uPhoneNum = $_POST["uPhoneNum"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set phoneNum='$uPhoneNum' where professional.userName='$userName'");
            echo "$userName has been updated to $uPhoneNum";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameGender($userName) {
        if (isset($_POST["uGender"])) {
            $uGender = $_POST["uGender"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set gender='$uGender' where professional.userName='$userName'");
            echo "$userName has been updated to $uGender";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameloginStatus($userName) {
        if (isset($_POST["uloginStatus"])) {
            $uloginStatus = $_POST["uloginStatus"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set loginStatus='$uloginStatus' where professional.userName='$userName'");
            echo "$userName has been updated to $uloginStatus";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNamelastLogin($userName) {
        if (isset($_POST["ulastLogin"])) {
            $ulastLogin = $_POST["ulastLogin"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set lastLogin='$ulastLogin' where professional.userName='$userName'");
            echo "$userName has been updated to $ulastLogin";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameEmail($userName) {
        if (isset($_POST["uEmail"])) {
            $uEmail = $_POST["uEmail"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set email='$uEmail' where professional.userName='$userName'");
            echo "$userName has been updated to $uEmail";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameProfession($userName) {
        if (isset($_POST["uProfession"])) {
            $uProfession = $_POST["uProfession"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set profession='$uProfession' where professional.userName='$userName'");
            echo "$userName has been updated to $uProfession";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameAddress($userName) {
        if (isset($_POST["uAddress"])) {
            $uAddress = $_POST["uAddress"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update professional set address='$uAddress' where professional.userName='$userName'");
            echo "$userName has been updated to $uAddress";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserName($userName) {
        if (isset($_POST["uProfessional"])) {
            $crl = new ProfessionalController;
            $custommer = new Professional;
            $custommer = json_decode($_POST["uProfessional"]);
            echo ($_POST["uProfessional"]);

            $_POST["userNameNew"] = $custommer->userName;
            $crl->upDateByUserNameUserName($userName);
            $userName = $custommer->userName;

            echo $custommer->fName;
            $_POST["uFirstName"] = $custommer->fName;
            $crl->upDateByUserNameFirstName($userName);

            $_POST["uLastName"] = $custommer->lName;
            $crl->upDateByUserNameLastName($userName);

            $_POST["uPassword"] = $custommer->password;
            $crl->upDateByUserNamePassword($userName);

            $_POST["uPhoneNum"] = $custommer->phoneNum;
            $crl->upDateByUserNamePhoneNum($userName);

            $_POST["uGender"] = $custommer->gender;
            $crl->upDateByUserNameGender($userName);

            $_POST["uloginStatus"] = $custommer->loginStatus;
            $crl->upDateByUserNameloginStatus($userName);

            $_POST["ulastLogin"] = $custommer->lastLogin;
            $crl->upDateByUserNamelastLogin($userName);

            $_POST["uEmail"] = $custommer->email;
            $crl->upDateByUserNameEmail($userName);

            $_POST["uProfession"] = $custommer->profession;
            $crl->upDateByUserNameProfession($userName);

            $_POST["uAddress"] = $custommer->address;
            $crl->upDateByUserNameAddress($userName);
        }
    }

    public function checkUserName(String $userName = null) {
        echo ProfessionalDB::checkUserName($userName);
    }

    public function saveImage($id) {
        if (isset($_POST["pimagep"])) {

            ProfessionalDB::saveProfileImage($id);
        } else {
            echo 'no file attached';
        }
    }

    public function getProfileImage($id) {
        ProfessionalDB::getProfileImage($id);
    }

    public function getProfileImageByUserName($Username) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $professional = new Professional;
        $rez = $db->query("select * from professional where userName='$Username'");
        $row = $rez->fetch_assoc();
        $image = ProfessionalDB::getProfileImage($row["id"]);
    }

    public function saveImageByUserName($Username) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $professional = new Professional;
        $rez = $db->query("select * from professional where userName='$Username'");
        $row = $rez->fetch_assoc();
        $id = $row["id"];
        if (isset($_POST["pimagep"])) {
            ProfessionalDB::saveProfileImage($id);
        } else {
            echo 'no file attached';
        }
    }

    public function UpDateProfileImage($id) {
        ProfessionalDB::UpDateProfileImage($id);
    }

    public function UpDateProfileImageByUserName($Username) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $professional = new Professional;
        $rez = $db->query("select * from professional where userName='$Username'");
        $row = $rez->fetch_assoc();
        $id = $row["id"];
        ProfessionalDB::UpDateProfileImage($id);
    }

    //for professional wall for the first time
    public static function getPostForProfessinalWall($regon) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $result = $db->query("call maxTaskIDforRegone('$regon')");
        $row = $result->fetch_assoc();
        
        $_SESSION["pWallOffset"] = $row["max(id)"];
        ProfessionalDB::getPostForProfessinalWall($regon);
    }

    //for professional wall for the lazy loading
    public function professionalWallLazyLoading($regon) {

        ProfessionalDB::getPostForProfessinalWall($regon);
    }

    public function addPost() {
        /* @var $jsonString type */

        $jsonString = ProfessionalDB::returnProfessionalByUserName($_POST["name"]);
        $object = json_decode($jsonString);
        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("INSERT INTO `ommal`.`professionalpost` (`discription`,`imagePost`, `like`, `dislike`, `date`, `Pid`) VALUES ('" . $_POST['discription'] . "','" . $_POST['imageWork'] . "', '2', '2', '" . $_POST['date'] . "', '$object->id');")) {
            echo 'done';
        } else {
            echo "something gose wrong";
        }
    }

    public function getPostForProfessionalForTheFirstTime($name) {
        $objectpro = ProfessionalDB::returnProfessionalByUserName($name);
        $jsonOb = json_decode($objectpro);
        $id = $jsonOb->id;
        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $object = $db->query("call maxpostforprofessional($id);");
        $row = $object->fetch_assoc();
        $_SESSION["pProfileOffset"] = $row["max(id)"];
        ProfessionalDB::getPostForProfessionalProfilePosts($id);
    }

    public function getPostForProfessionalForLazyLoading($name) {
        $objectpro = ProfessionalDB::returnProfessionalByUserName($name);
        $jsonOb = json_decode($objectpro);
        $id = $jsonOb->id;
        ProfessionalDB::getPostForProfessionalProfilePosts($id);
    }

    public function getAllProfName() {
        $rez = array();
        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $object = $db->query("select userName from professional");
        while ($row = $object->fetch_assoc()) {
            array_push($rez, $row["userName"]);
        }
        echo json_encode($rez);
    }

    public function getProfessionalWithImage($username) {
        $json = ProfessionalDB::returnProfessionalByUserName($username);
        $obj = json_decode($json);
        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $object = $db->query("call getProfessionalWithImage($obj->id)");
        $row = $object->fetch_assoc();
        echo json_encode($row);
    }

}
