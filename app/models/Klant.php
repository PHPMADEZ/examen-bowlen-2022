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
     public function getSingleKlant($Id) {
    try {
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
                        WHERE persoon.Id = :Id");
      $this->db->bind(':Id', $Id, PDO::PARAM_INT);
      return $this->db->single();
    } catch(PDOException $e) {
      logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
      return 0;
  }
    }

    public function updateKlant($post) {
        // var_dump($post);exit();
      // $this->db->query("UPDATE reservering, klant
      //                   SET voornaam = :voornaam,
      //                       achternaam = :achternaam,
      //                       tijd = :tijd,
      //                       datum = :datum,
      //                       optie = :optie
      //                   WHERE klant.id = :id");

      $this->db->query("UPDATE persoon
                        INNER JOIN contact
                        ON persoon.Id = contact.PersoonId
                        SET Voornaam = :Voornaam,
                            Tussenvoegsel = :Tussenvoegsel,
                            Achternaam = :Achternaam,
                            IsVolwassen = :IsVolwassen,
                            Mobiel = :Mobiel,
                            Email = :Email
                        WHERE persoon.Id = :Id");

      $this->db->bind(':Id', $post["Id"], PDO::PARAM_INT);
      $this->db->bind(':Voornaam', $post["Voornaam"], PDO::PARAM_STR);
      $this->db->bind(':Tussenvoegsel', $post["Tussenvoegsel"], PDO::PARAM_STR);
      $this->db->bind(':Achternaam', $post["Achternaam"], PDO::PARAM_STR);
      $this->db->bind(':IsVolwassen', $post["IsVolwassen"], PDO::PARAM_STR);
      $this->db->bind(':Mobiel', $post["Mobiel"], PDO::PARAM_STR);
      $this->db->bind(':Email', $post["Email"], PDO::PARAM_STR);

      return $this->db->execute();
    }

  }

?>