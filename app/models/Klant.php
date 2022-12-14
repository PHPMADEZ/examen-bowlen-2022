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
                              , persoon.Tussenvoegsel
                              , persoon.Achternaam
                              , persoon.IsVolwassen
                              , contact.Mobiel
                              , contact.Email 
                        FROM persoon 
                        INNER JOIN contact 
                        ON persoon.Id = contact.PersoonId 
                        ORDER BY Id ASC;");
      $result = $this->db->resultSet();
      return $result;
    }
  }

?>