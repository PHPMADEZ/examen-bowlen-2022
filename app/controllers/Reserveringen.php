<?php
namespace TDD\controllers;

use TDD\libraries\Controller;

class Reserveringen extends Controller 
{
    // Properties, fields
    private $reserveringModel;

    // Dit is de constructor
    public function __construct()
    {
        $this->reserveringModel = $this->model('Reservering');
    }

    public function index()
    {
        /**
         * Haal via de method getReserveringen() uit de model Reservering de records op
         * uit de database
         */
        $reserveringen = $this->reserveringModel->getReserveringen();

        /**
         * Maak de inhoud voor de tbody in de view
         */
        $rows = '';
    
        foreach ($reserveringen as $value){
            $rows .= "<tr>
                        <td>" . $value->voornaam . "</td>
                        <td>" . $value->achternaam . "</td>
                        <td>" . $value->tijd . "</td>
                        <td>" . $value->datum . "</td>
                        <td>" . $value->optie . "</td>
                        </tr>";
        }


        $data = [
        'title' => '<h3>Reserveringsoverzicht</h3>',
        'reserveringen' => $rows
        ];
        $this->view('reserveringen/index', $data);
    }

}