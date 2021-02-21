<?php

require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/CustomerDB.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app\model/Customer.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/ProfessionalDB.php';
require_once 'C:/xampp/htdocs/OmmalPHPMVC/app/model/Professional.php';

class customerController extends Controller {

    //add customer
    public function add() {
        $custommer = new Customer;
        if (isset($_POST["userName"]) && isset($_POST["fName"]) && isset($_POST["lName"]) && isset($_POST["password"]) && isset($_POST["phoneNum"]) && isset($_POST["gender"]) && isset($_POST["loginStatus"]) && isset($_POST["lastLogin"]) && isset($_POST["email"])) {
            $custommer->userName = $_POST["userName"];
            $custommer->fName = $_POST["fName"];
            $custommer->lName = $_POST["lName"];
            $custommer->password = $_POST["password"];
            $custommer->phoneNum = $_POST["phoneNum"];
            $custommer->gender = $_POST["gender"];
            $custommer->loginStatus = $_POST["loginStatus"];
            $custommer->lastLogin = $_POST["lastLogin"];
            $custommer->email = $_POST["email"];
            CustomerDB::add($custommer);
        } else {
            echo "you forgot a param";
        }
    }

    //delete customer
    public function deleteByID($id) {
        CustomerDB::deleteByID($id);
    }

    public function deleteByUserName($userName) {
        CustomerDB::deleteByUserName($userName);
    }

    //update customer 
    //getcustome(user name)
    public function getCustomerByUserName($userName) {
        CustomerDB::getCustomerByUserName($userName);
    }

    public function getCustomerByID($id) {
        CustomerDB::getCustomerByID($id);
    }

    public function upDateByUserNameUserName($userNameOld) {
        if (isset($_POST["userNameNew"])) {
            $userNameNew = $_POST["userNameNew"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");



            $rez = $db->query("update customer set userName='$userNameNew' where customer.userName='$userNameOld'");
            echo "$userNameOld has been updated to $userNameNew";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameFirstName($userName) {
        if (isset($_POST["uFirstName"])) {
            $uFirstName = $_POST["uFirstName"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set FirstName='$uFirstName' where customer.userName='$userName'");
            echo "$userName has been updated to $uFirstName";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameLastName($userName) {
        if (isset($_POST["uLastName"])) {
            $uLastName = $_POST["uLastName"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set LastName='$uLastName' where customer.userName='$userName'");
            echo "$userName has been updated to $uLastName";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNamePassword($userName) {
        if (isset($_POST["uPassword"])) {
            $uPassword = $_POST["uPassword"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set passwd='$uPassword' where customer.userName='$userName'");
            echo "$userName has been updated to $uPassword";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNamePhoneNum($userName) {
        if (isset($_POST["uPhoneNum"])) {
            $uPhoneNum = $_POST["uPhoneNum"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set phoneNum='$uPhoneNum' where customer.userName='$userName'");
            echo "$userName has been updated to $uPhoneNum";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameGender($userName) {
        if (isset($_POST["uGender"])) {
            $uGender = $_POST["uGender"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set gender='$uGender' where customer.userName='$userName'");
            echo "$userName has been updated to $uGender";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameloginStatus($userName) {
        if (isset($_POST["uloginStatus"])) {
            $uloginStatus = $_POST["uloginStatus"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set loginStatus='$uloginStatus' where customer.userName='$userName'");
            echo "$userName has been updated to $uloginStatus";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNamelastLogin($userName) {
        if (isset($_POST["ulastLogin"])) {
            $ulastLogin = $_POST["ulastLogin"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set lastLogin='$ulastLogin' where customer.userName='$userName'");
            echo "$userName has been updated to $ulastLogin";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserNameEmail($userName) {
        if (isset($_POST["uEmail"])) {
            $uEmail = $_POST["uEmail"];
            require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

            $rez = $db->query("update customer set email='$uEmail' where customer.userName='$userName'");
            echo "$userName has been updated to $uEmail";
        } else {
            echo "you need to add user name new in post";
        }
    }

    public function upDateByUserName($userName) {
        if (isset($_POST["uCustomer"])) {
            $crl = new customerController;
            $custommer = new Customer;
            $custommer = json_decode($_POST["uCustomer"]);

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
        } else
            echo "hi";
    }

    public function getAll() {
        CustomerDB::getAll();
    }

    public function checkUserName($userName) {
        echo CustomerDB::checkUserName($userName);
    }

    public static function UpDateProfileImage($id) {
        CustomerDB::UpDateProfileImage($id);
    }

    public static function getProfileImage($id) {
        CustomerDB::getProfileImage($id);
    }

    public static function saveProfileImage($id) {
        CustomerDB::saveProfileImage($id);
    }

    public function getProfileImageByUserName($Username) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $rez = $db->query("select * from customer where userName='$Username'");
        $row = $rez->fetch_assoc();
        $image = CustomerDB::getProfileImage($row["id"]);
    }

    public function saveImageByUserName($Username) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where userName='$Username'");
        $row = $rez->fetch_assoc();
        $id = $row["id"];
        if (isset($_POST["pimagec"])) {
            CustomerDB::saveProfileImage($id);
        } else {
            echo 'no file attached';
        }
    }

    //for my task UI
    public function getTasksForTheFirstTime($userName) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where userName='$userName'");
        $row = $rez->fetch_assoc();
        $id = $row["id"];

        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $rez = $db->query("call maxTaskIdforUser($id);");
        $row = $rez->fetch_assoc();
        $MaxTaskID = $row["max(id)"];
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");

        $rez = $db->query("call getLeatestTasks($id,$MaxTaskID)");
        $rezarr[] = new ArrayObject();
        while ($row = $rez->fetch_assoc()) {
            $_SESSION["lastReashedTask"] = $row["id"];
            array_push($rezarr, $row);
        }
        array_shift($rezarr);
        echo json_encode($rezarr);
    }

    //for my task UI
    public function getTasksForUpDate($userName) {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select * from customer where userName='$userName'");
        $row = $rez->fetch_assoc();
        $id = $row["id"];

        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $offset = intval($_SESSION["lastReashedTask"] - 1);
        $rez = $db->query("call getLeatestTasks($id,$offset)");
        $rezarr[] = new ArrayObject();
        while ($row = $rez->fetch_assoc()) {
            array_push($rezarr, $row);
            $_SESSION["lastReashedTask"] = $row["id"];
        }
        array_shift($rezarr);
        echo json_encode($rezarr);
    }

    //for wall customer
    public function getCustomerWallForTheFirstTime() {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("call maxPosts();");
        $row = $rez->fetch_assoc();
        $_SESSION["cPostOffset"] = $row["max(id)"];
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("call getCustomerWall(" . $_SESSION["cPostOffset"] . ");");
        $posts = array();
        while ($rows = $rez->fetch_assoc()) {
            $tempObject1 = new stdClass();
            $tempObject1->id = $rows["id"];
            $tempObject1->name = $rows["name"];
            $tempObject1->date = $rows["date"];
            $tempObject1->discription = $rows["discription"];
            $tempObject1->imageWork = $rows["imageWork"];
            array_push($posts, $tempObject1);
            $_SESSION["cPostOffset"] = $rows["id"] - 1;
        }

        echo json_encode($posts);
    }

    public function getCustomerWallForLayzLoading() {

        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("call getCustomerWall(" . $_SESSION["cPostOffset"] . ");");

        $posts = array();
        while ($rows = $rez->fetch_assoc()) {
            $tempObject = new stdClass();
            $tempObject->id = $rows["id"];
            $tempObject->name = $rows["name"];
            $tempObject->date = $rows["date"];
            $tempObject->discription = $rows["discription"];
            $tempObject->imageWork = $rows["imageWork"];
            array_push($posts, $tempObject);
            $_SESSION["cPostOffset"] = $rows["id"] - 1;
        }

        echo json_encode($posts);
    }

    public function rattingPost($rating, $username) {
        $obj = ProfessionalDB::returnProfessionalByUserName($username);
        $objt = json_decode($obj);
        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        if ($db->query("UPDATE `ommal`.`professional` SET `rattingsum` = rattingsum+'$rating', `rattingcounter` = rattingcounter+1 WHERE (`id` = '$objt->id');")) {
            echo 'ratting success!';
        } else {
            echo "try again !";
        }
    }

    public function getCustomerOrders($username) {
        $jsonOBJ = CustomerDB::returnCustomerByUserName($username);
        $obj = json_decode($jsonOBJ);
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("call getOrdersForCustomer($obj->id)");
        $posts = array();
        while ($rows = $rez->fetch_assoc()) {
            array_push($posts, $rows);
        }
        echo json_encode($posts);
    }

    public function getProfessionalsUNPA() {
        require("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = $db->query("select userName, profession, address from professional");
        $posts = array();
        while ($rows = $rez->fetch_assoc()) {
            array_push($posts, $rows);
        }
        echo json_encode($posts);
    }

}
