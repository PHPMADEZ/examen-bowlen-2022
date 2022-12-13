<?php

class Medewerker extends Database {

    /*
    # gets all the users from the database
    $ return $users - the list of users
    */
    public function getAllKlanten() {
        $db = $this->connect();
        $sql = "SELECT * from persoon inner join klant on persoon.id = klant.persoons_id inner join contact on persoon.id = contact.persoons_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $klanten = $stmt->fetchAll();
        return $klanten;
    }
    /*
    # gets all medewerkers from the database to display in the table
    */
    public function getAllMedewerkers() {
        $db = $this->connect();
        $sql = "SELECT * from persoon inner join medewerker on persoon.id = medewerker.persoons_id inner join contact on persoon.id = contact.persoons_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $medewerkers = $stmt->fetchAll();
        return $medewerkers;
    }
    /*
    # insert a new klant into the database
    */
    protected function insertKlant($voornaam, $achternaam, $geboortedatum, $adres, $email, $telefoonnummer) {
        $db = $this->connect();
        $sql = "INSERT INTO persoon (voornaam, achternaam, geboortedatum) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$voornaam, $achternaam, $geboortedatum]);
        $sql = "SELECT id from persoon where voornaam = ? and achternaam = ? and geboortedatum = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$voornaam, $achternaam, $geboortedatum]);
        $id = $stmt->fetch();
        $sql = "INSERT INTO contact (email, adres, telefoonnummer, persoons_id) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email, $adres, $telefoonnummer, $id['id']]);
        $sql = "INSERT INTO klant (persoons_id, datumaangemeld) VALUES (?, current_timestamp())";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id['id']]);
    }

    public function getUserID($id) {
        $db = $this->connect();
        $sql = "SELECT persoons_id from klant where id = ?;";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $klant_id = $stmt->fetch();
        return $klant_id['persoons_id'];
    }

    /*
    # Delete functionality to delete a klant from the database
    */
    protected function deleteKlantFromPersoon($id) {
        $db = $this->connect();
        $sql = "SELECT persoons_id from klant where id = ?;";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $klant_id = $stmt->fetch();
        $sql = "DELETE FROM persoon WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$klant_id['persoons_id']]);

    }

    //update klant information
    public function updateKlant($id, $voornaam, $achternaam, $adres, $email, $telefoonnummer) {
        $db = $this->connect();
        $sql = "UPDATE persoon SET voornaam = ?, achternaam = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$voornaam, $achternaam, $geboortedatum, $id]);
        $sql = "UPDATE contact SET email = ?, adres = ?, telefoonnummer = ? WHERE persoons_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email, $adres, $telefoonnummer, $id]);
        
    }










}

    



   





    
