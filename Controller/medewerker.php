<?php

class MedewerkerController extends Medewerker {

    public function showUitslag()
    {
        $log = $this->getUitslag();
        return $log;
    }
    public function editScore($id, $nieuwescore)
    {
        $this->updateScore($id, $nieuwescore);
    }
    
    
}