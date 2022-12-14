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
         * Haal via de method getSingleKlant() uit de model Klant de records op
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
                        <td>" . $value->Datum . "</td>
                        <td>" . $value->AantalUren . "</td>
                        <td>" . $value->BeginTijd . "</td>
                        <td>" . $value->EindTijd . "</td>
                        <td>" . $value->AantalVolwassen . "</td>
                        <td>" . $value->AantalKinderen . "</td>
                        <td><a href='" . URLROOT . "/klanten/scores/$value->Id'>Opmerkingen</a></td>
                        </tr>";
        }


        $data = [
        'title' => '<h3>Reserveringoverzicht</h3>',
        'klanten' => $rows
        ];
        $this->view('klanten/index', $data);
    }
    public function scores()
    {
        /**
         * Haal via de method getSingleKlant() uit de model Klant de records op
         * uit de database
         */
        $klanten = $this->klantModel->getScores();
        /**
         * Maak de inhoud voor de tbody in de view
         */
        $rows = '';
    
        foreach ($klanten as $value){
            $rows .= "<tr>
                        <td>" . $value->Voornaam . "</td>
                        <td>" . $value->Tussenvoegsel . "</td>
                        <td>" . $value->Achternaam . "</td>
                        <td>" . $value->Aantalpunten . "</td>
                        <td>" . $value->Datum . "</td>
                        </tr>";
        }


        $data = [
        'title' => '<h3>Reserveringoverzicht</h3>',
        'scores' => $rows
        ];
        $this->view('klanten/scores', $data);
    }
}