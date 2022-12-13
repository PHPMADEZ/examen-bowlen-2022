<?php

  use TDD\libraries\Database;

  class Reservering {
    // Properties, fields
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getReserveringen() {
      $this->db->query("SELECT reservering.id, reservering.tijd, reservering.datum, reservering.optie, klant.voornaam, klant.achternaam FROM reservering INNER JOIN klant ON reservering.klantId = klant.id ORDER BY datum ASC;");
      $result = $this->db->resultSet();
      return $result;
    }
    public function getSingleReservering($id) {
      $this->db->query("SELECT reservering.id
                              ,reservering.tijd
                              ,reservering.datum
                              , reservering.optie
                              , klant.voornaam
                              , klant.achternaam 
                        FROM reservering 
                        INNER JOIN klant 
                        ON reservering.klantId = klant.id 
                        WHERE reservering.id = :id
                        ORDER BY datum ASC;");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
    }

    public function updateReservering($post) {
        // var_dump($post);exit();
      // $this->db->query("UPDATE reservering, klant
      //                   SET voornaam = :voornaam,
      //                       achternaam = :achternaam,
      //                       tijd = :tijd,
      //                       datum = :datum,
      //                       optie = :optie
      //                   WHERE klant.id = :id");

      $this->db->query("UPDATE reservering
                        INNER JOIN klant
                        ON klant.id = reservering.klantId
                        SET voornaam = :voornaam,
                            achternaam = :achternaam,
                            tijd = :tijd,
                            datum = :datum,
                            optie = :optie
                        WHERE reservering.id = :id");

      $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
      $this->db->bind(':voornaam', $post["voornaam"], PDO::PARAM_STR);
      $this->db->bind(':achternaam', $post["achternaam"], PDO::PARAM_STR);
      $this->db->bind(':tijd', $post["tijd"], PDO::PARAM_STR);
      $this->db->bind(':datum', $post["datum"], PDO::PARAM_STR);
      $this->db->bind(':optie', $post["optie"], PDO::PARAM_STR);

      return $this->db->execute();
    }
    public function deleteReservering($id) {
      try {
          $this->db->query("DELETE FROM reservering WHERE id = :id");
          $this->db->bind("id", $id, PDO::PARAM_INT);
          return $this->db->execute();
      } catch(PDOException $e) {
          logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
          return 0;
      }
  }
  
  public function createReservering($post) {
    try {
      $this->db->query("INSERT INTO klant (klantId, voornaam, achternaam) 
                          VALUES(:klantId, :voornaam, :achternaam)");
      $this->db->query("INSERT INTO reservering (id, tijd, datum, optie) 
                          VALUES(:id, :tijd, :datum, :optie)");

      $this->db->bind(':klantId', NULL, PDO::PARAM_INT);
      $this->db->bind(':voornaam', $post["voornaam"], PDO::PARAM_STR);
      $this->db->bind(':achternaam', $post["achternaam"], PDO::PARAM_STR);
      $this->db->bind(':id', NULL, PDO::PARAM_INT);
      $this->db->bind(':tijd', $post["tijd"], PDO::PARAM_STR);
      $this->db->bind(':datum', $post["datum"], PDO::PARAM_STR);
      $this->db->bind(':optie', $post["optie"], PDO::PARAM_STR);

      return $this->db->execute();

    } catch (PDOException $e) {
        logger(__FILE__, __METHOD__, __LINE__, $e->getMessage());
        return 0;
    }
  }
  }

?>