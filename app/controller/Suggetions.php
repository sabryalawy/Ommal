<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Suggetions
 *
 * @author Alawi
 */
class Suggetions {

    public function index() {
        new AjesentArray();
        $c = new PalestineCordentsCities();
        echo "/n";
        var_dump(AjesentArray::$cities);
        echo '/n' . $c->betlahem->yN;
    }

    public static function getCustomerRegion($yl, $xl) {
        $c = new PalestineCordentsCities();
        if (($xl <= $c->gaza->xE && $xl >= $c->gaza->xW) && ($yl > $c->gaza->yS && $yl < $c->gaza->yN)) {
            return "gaza";
        } else if (($xl <= $c->ramallah->xE && $xl >= $c->ramallah->xW) && ($yl > $c->ramallah->yS && $yl < $c->ramallah->yN)) {
            return "ramallah";
        } else if (($xl <= $c->jericho->xE && $xl >= $c->jericho->xW) && ($yl > $c->jericho->yS && $yl < $c->jericho->yN)) {
            return "jericho";
        } else if (($xl <= $c->jerusalem->xE && $xl >= $c->jerusalem->xW) && ($yl > $c->jerusalem->yS && $yl < $c->jerusalem->yN)) {
            return "jerusalem";
        } else if (($xl <= $c->betlahem->xE && $xl >= $c->betlahem->xW) && ($yl > $c->betlahem->yS && $yl < $c->betlahem->yN)) {
            return "bethlehem";
        } else if (($xl <= $c->jeneen->xE && $xl >= $c->jeneen->xW) && ($yl > $c->jeneen->yS && $yl < $c->jeneen->yN)) {
            return "jeneen";
        } else if (($xl <= $c->khaleel->xE && $xl >= $c->khaleel->xW) && ($yl > $c->khaleel->yS && $yl < $c->khaleel->yN)) {
            return "hebron";
        } else if (($xl <= $c->nables->xE && $xl >= $c->nables->xW) && ($yl > $c->nables->yS && $yl < $c->nables->yN)) {
            return "nablus";
        } else if (($xl <= $c->silfeet->xE && $xl >= $c->silfeet->xW) && ($yl > $c->silfeet->yS && $yl < $c->silfeet->yN)) {
            return "salfit";
        } else if (($xl <= $c->tulkrim->xE && $xl >= $c->tulkrim->xW) && ($yl > $c->tulkrim->yS && $yl < $c->tulkrim->yN)) {
            return "tulkarm";
        } else {
//            echo "x = " . ($xl <= $c->tulkrim->xE && $xl >= $c->tulkrim->xW) . "<br>";
//            echo "y = " . ($yl > $c->tulkrim->yS && $yl < $c->tulkrim->yN) . "<br>";
//            echo "x = " . $xl . ", y = " . $yl . "<br>";
//            echo $c->tulkrim->xW . " " . $c->tulkrim->xE;
            return null;
        }
    }

    public function getBestOfRegion($y, $x) {

        $region = Suggetions::getCustomerRegion($y, $x);
        new AjesentArray();
        if ($region != null) {
            $profArrForReg = Suggetions::getByRegion($region);
            if (!empty($profArrForReg)) {
                if (count($profArrForReg) == 4) {
                    echo json_encode($profArrForReg);
                } else {
                    $getAj = Suggetions::getAjes($region);
                    $profArrForReg = (array) array_merge($profArrForReg, $getAj);
                    if (count($profArrForReg) < 4) {
                        $temp = Suggetions::getAll();
                        $profArrForReg = (array) array_merge($profArrForReg, $temp);
                    }
                    echo json_encode($profArrForReg);
                }
            } else {
                
                $temp = Suggetions::getAjes($region);
                if (count($temp) < 4) {
                    $temp = array_merge(Suggetions::getAll());
                }
//                echo json_encode($temp);
            }
        } else
            echo 'NoRegionFound';
    }

    public static function getByRegion($region) {

        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = array();
        $object = $db->query("call getBestInRegion('$region');");
        while ($row = $object->fetch_assoc()) {
            array_push($rez, $row);
        }
        return $rez;
    }

    public static function getAjes($region) {
        $i = count(AjesentArray::$cities["$region"]);
        $rez = array();
        
        while ($i > 0) {
            echo AjesentArray::$cities["$region"][$i - 1];
            $temp = Suggetions::getByRegion(AjesentArray::$cities["$region"][$i - 1]);
            if (!empty($temp)) {
                $rez = $rez + $temp;
            }
            echo json_encode($rez)."<br>";
            $i--;
        }
        return $rez;
    }

    public static function getAll() {
        require ("C:/xampp/htdocs/OmmalPHPMVC/app/config/DBConnection.php");
        $rez = array();
        $object = $db->query("call getBestProfessionalOfAllTime();");
        while ($row = $object->fetch_assoc()) {
            array_push($rez, $row);
        }
        return $rez;
    }

}
