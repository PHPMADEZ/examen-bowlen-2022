<?php
namespace TDD\controllers;

use TDD\libraries\Controller;

class Klanten extends Controller 
{
    // Properties, fields
    private $klantModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->klantModel = $this->model('Klant');
    }

    public function index()
    {
        /**
         * Haal via de method getKlanten() uit de model Klant de records op
         * uit de database
         */
        $klanten = $this->klantModel->getKlanten();
        /**
         * Maak de inhoud voor de tbody in de view
         */
        $rows = '';
    
        foreach ($klanten as $value){
            $rows .= "<tr>
                        <td>" . $value->Voornaam . "</td>
                        <td>" . $value->Tussenvoegsel . "</td>
                        <td>" . $value->Achternaam . "</td>
                        <td>" . $value->Mobiel . "</td>
                        <td>" . $value->Email . "</td>
                        <td>" . $value->IsVolwassen . "</td>
                        </tr>";
        }


        $data = [
        'title' => '<h3>Klantenoverzicht</h3>',
        'klanten' => $rows
        ];
        $this->view('klanten/index', $data);
    }

}