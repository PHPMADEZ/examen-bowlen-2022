<?php

  use TDD\libraries\Database;

  class Klant {
    // Properties, fields
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getKlanten() {
      $this->db->query("SELECT persoon.Id
                              , persoon.Voornaam
                              , reservering.Datum
                              , reservering.AantalUren
                              , reservering.BeginTijd
                              , reservering.EindTijd
                              , reservering.AantalVolwassen
                              , reservering.AantalKinderen 
                        FROM persoon 
                        INNER JOIN reservering 
                        ON persoon.Id = reservering.PersoonId 
                        WHERE persoon.Id = 4
                        ORDER BY Datum ASC;");
      $result = $this->db->resultSet();
      return $result;
    }

    // public function getScores() {
    //   $this->db->query("SELECT persoon.Id
    //                           , persoon.Voornaam
    //                           , persoon.Tussenvoegsel
    //                           , persoon.Achternaam
    //                           , uitslag.Aantalpunten
    //                           , reservering.Datum
    //                     FROM persoon 
    //                     INNER JOIN uitslag 
    //                     ON persoon.Id = uitslag.SpelId 
    //                     INNER JOIN reservering 
    //                     ON persoon.Id = reservering.PersoonId 
    //                     ORDER BY AantalPunten ASC;");
    //   $result = $this->db->resultSet();
    //   return $result;
    // }

    public function getScores($Id) {
      $this->db->query("SELECT persoon.Voornaam as PEVO
                              ,persoon.Tussenvoegsel as PETU
                              ,persoon.Achternaam as PEAC
                              ,uitslag.Aantalpunten as UIAA
                              ,reservering.Datum
  
                        FROM Spel

                        INNER JOIN uitslag 
                        ON uitslag.SpelId = spel.Id

                        INNER JOIN persoon 
                        ON persoon.Id = spel.PersoonId

                        INNER JOIN reservering
                        ON reservering.Id = spel.ReserveringId

                        WHERE spel.ReserveringId = $Id
                        
                        ORDER BY AantalPunten ASC;");
      $result = $this->db->resultSet();
      return $result;
    }

  }

?>