<?php

class MedewerkerController extends Medewerker {

    /*
    # return reserveringen informatie
    */
    public function showReservering()
    {
        $log = $this->getReservering();
        return $log;
    }

}