<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PalestineCordentsCities
 *
 * @author Alawi
 */
class PalestineCordentsCities {

    public $ramallah;
    public $silfeet;
    public $nables;
    public $tulkrim;
    public $jeneen;
    public $betlahem;
    public $khaleel;
    public $jericho;
    public $jerusalem;
    public $gaza;

    public function __construct() {
        $this->ramallah = new stdClass();
        $this->silfeet = new stdClass();
        $this->nables = new stdClass();
        $this->tulkrim = new stdClass();
        $this->jeneen = new stdClass();
        $this->betlahem = new stdClass();
        $this->khaleel = new stdClass();
        $this->jericho = new stdClass();
        $this->jerusalem = new stdClass();
        $this->gaza = new stdClass();
        //east yamen, west shmal
        //ramallah
        //31.904263060421286, 34.922596412268376
        $this->ramallah->yN = 32.10163749169528;

        $this->ramallah->yS = 31.81851296335439;

        $this->ramallah->xE = 35.337330240983334;

        $this->ramallah->xW = 34.922596412268376;

        //$silfeet 31.328892651301448, 34.21397821136982
        $this->silfeet->yN = 32.14236629695206;

        $this->silfeet->yS = 32.10163749169528;

        $this->silfeet->xE = 35.337330240983334;

        $this->silfeet->xW = 34.21397821136982;

        //$nables
        $this->nables->yN = 32.28644003560183;

        $this->nables->yS = 32.14236629695206;

        $this->nables->xE = 35.557330240983334;

        $this->nables->xW = 34.21397821136982;

        //$tulkrim
        $this->tulkrim->yN = 32.34134626003434;

        $this->tulkrim->yS = 32.28644003560183;

        $this->tulkrim->xE = 35.5550645104745;

        $this->tulkrim->xW = 34.21397821136982;

        //$jeneen
        $this->jeneen->yN = 32.50443830071834;

        $this->jeneen->yS = 32.34134626003434;

        $this->jeneen->xE = 35.557330240983334;

        $this->jeneen->xW = 34.21397821136982;

        //$betlahem 
        $this->betlahem->yN = 31.725718196205722;

        $this->betlahem->yS = 31.65093047707891;

        $this->betlahem->xE = 35.337330240983334;

        $this->betlahem->xW = 34.21397821136982;

        //$khaleel
        $this->khaleel->yN = 31.65093047707891;

        $this->khaleel->yS = 31.35000536079065;

        $this->khaleel->xE = 35.557330240983334;

        $this->khaleel->xW = 34.8050645104745;

        //$jericho 32.11154676840755, 35.47740592193758 31.565552227545982, 35.39226188057323
        $this->jericho->yN =  32.11154676840755;

        $this->jericho->yS = 31.565552227545982;

        $this->jericho->xE = 35.554097815588995;

        $this->jericho->xW = 35.337330240983334;

        //$jerusalem 
        $this->jerusalem->yN = 31.81851296335439;

        $this->jerusalem->yS = 31.725718196205722;

        $this->jerusalem->xE = 35.337330240983334;

        $this->jerusalem->xW = 34.21397821136982;

        //gaza  31.60064866007813, 34.483143245360345  31.230304007687067, 34.260670105021234 31.544488025271423, 34.5655407047452  31.33123874344157, 34.208485047410825
        $this->gaza->yN = 31.60064866007813;

        $this->gaza->yS = 31.230304007687067;

        $this->gaza->xE = 34.5655407047452;

        $this->gaza->xW = 34.208485047410825;
    }

}
