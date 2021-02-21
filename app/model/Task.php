<?php

class Task {

    public $id;
    public $locationx;
    public $locationy;
    public $totalPrice;
    public $Cid;
    public $discription;
    
    public $taskimage;
    public $taken;
    public $profession;
    public $address;
    public $date;

    public function __construct() {
        $this->id = 0;
        $this->locationx = "";
        $this->locationy = "";
        $this->totalPricce = "";
        $this->Cid = 0;
        $this->discription = "";

        $this->taskimage = 0;
        $this->taken= "f";
        $this->profession= 0;
        $this->address = 0;
        $this->date = 0;
    }

}
