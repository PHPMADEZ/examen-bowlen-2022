<?php

  use TDD\libraries\Database;

  class Reservering {
    // Properties, fields
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getReserveringen() {
      $this->db->query("SELECT reservering.tijd, reservering.datum, reservering.optie, klant.voornaam, klant.achternaam FROM reservering INNER JOIN klant ON reservering.klantId = klant.id ORDER BY datum ASC;");
      $result = $this->db->resultSet();
      return $result;
    }


  }

?>