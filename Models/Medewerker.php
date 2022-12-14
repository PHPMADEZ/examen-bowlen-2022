<?php

class Medewerker extends Database {
    /*
    # get all uitslagen from uitslag table
    */
    protected function getReservering() {
        $db = $this->connect();
        $sql = "SELECT voornaam, tussenvoegsel, achternaam, reservering.datum, reservering.AantalUren, reservering.AantalVolwassen, reservering.AantalKinderen, reserveringstatus.Naam FROM persoon inner join reservering on persoon.Id = reservering.PersoonId inner join reserveringstatus on reservering.ReserveringStatusId = reserveringstatus.Id ORDER BY `reservering`.`datum` DESC";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $reservering = $stmt->fetchAll();
        return $reservering;
    }
}