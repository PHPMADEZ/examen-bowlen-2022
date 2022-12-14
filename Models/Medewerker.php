<?php

class Medewerker extends Database {
    /*
    # Update the score of a uitslag with a given id and nieuwescore
    @paramas $id - the id of the uitslag to update
    @paramas $nieuwescore - the new score of the uitslag
    */
    protected function updateScore($id, $nieuwescore) {
        $db = $this->connect();
        $sql = "UPDATE uitslag SET Aantalpunten = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$nieuwescore, $id]);
    }
    /*
    # get all uitslagen from uitslag table
    */
    protected function getUitslag() {
        $db = $this->connect();
        $sql = "SELECT * from uitslag inner join spel on uitslag.SpelId = spel.Id inner join persoon on Spel.PersoonId = persoon.Id;";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $logs = $stmt->fetchAll();
        return $logs;
    }
}