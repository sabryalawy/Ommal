<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AjesentArray
 *
 * @author Alawi
 */
class AjesentArray {

    public static $cities;

    public function __construct() {


        $jeneen = array();
        array_push($jeneen, "tulkarm");

        $tulkrim = array();
        array_push($tulkrim, "nablus");
        array_push($tulkrim, "jeneen");

        $nables = array();
        array_push($nables, "tulkarm");
        array_push($nables, "salfit");

        $silfeet = array();
        array_push($silfeet, "nablus");
        array_push($silfeet, "ramallah");

        $ramallah = array();
        array_push($ramallah, "salfit");
        array_push($ramallah, "jerusalem");
        array_push($ramallah, "bethlehem");
        array_push($ramallah, "jericho");

        $betlahem = array();
        array_push($betlahem, "ramallah");
        array_push($betlahem, "jerusalem");
        array_push($betlahem, "hebron");

        $jerusalem = array();
        array_push($jerusalem, "ramallah");
        array_push($jerusalem, "bethlehem");
        array_push($jerusalem, "hebron");

        $khaleel = array();
        array_push($khaleel, "bethlehem");
        array_push($khaleel, "jerusalem");

        $gaza = array();

        $jericho = array();
        array_push($jericho, "ramallah");

        AjesentArray::$cities = array(
            "gaza" => $gaza,
            "ramallah" => $ramallah,
            "jericho" => $jericho,
            "salfit" => $silfeet,
            "nablus" => $nables,
            "hebron" => $khaleel,
            "jeneen" => $jeneen,
            "bethlehem" => $betlahem,
            "jerusalem" => $jerusalem,
            "tulkarm" => $tulkrim
        );
    }

}
