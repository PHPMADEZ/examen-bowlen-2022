<?php

class MedewerkerController extends Medewerker {

    /*
    -- gets all the users from the database
    - @return $users - the list of users
    */
    public function showUsers() {
        $medewerkers = $this->getAllMedewerkers();
        return $medewerkers;
    }
    /*
    -- gets all klanten from the database to display in the table
    */
    public function showKlanten() {
        $klanten = $this->getAllKlanten();
        return $klanten;
    }
    /*
    -- insert a new klant into the database
    */
    public function addKlant($voornaam, $achternaam, $geboortedatum ,$adres, $email, $telefoonnummer) {
        $this->insertKlant($voornaam, $achternaam,$geboortedatum ,$adres,  $email, $telefoonnummer);
    }
    /*
    -- delete a medewerker into the database
    */
    public function verwijderKlant($id) {
        $this->deleteKlantFromPersoon($id);
    }
    
    public function showLog()
    {
        $log = $this->getLog();
        return $log;
    }
    
    
}