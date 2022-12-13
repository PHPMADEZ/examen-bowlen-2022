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
    public function showKlanten() {
        $klanten = $this->getAllKlanten();
        return $klanten;
    }
    public function addKlant($voornaam, $achternaam, $adres, $email, $telefoonnummer) {
        $this->insertKlant($voornaam, $achternaam, $adres,  $email, $telefoonnummer);
    }
    public function verwijderKlant($id) {
        $this->deleteKlantFromPersoon($id);
    }
    
    
}