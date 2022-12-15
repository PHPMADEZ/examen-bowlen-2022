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
                        <td><a href='" . URLROOT . "/klanten/update/$value->Id'><i class='bi bi-pencil-square'></i></a></td>
                        </tr>";
        }


        $data = [
        'title' => '<h3>Klantenoverzicht</h3>',
        'klanten' => $rows
        ];
        $this->view('klanten/index', $data);
    }

    public function update($Id = null)
    {
        /**
         * Check of we van het update formulier komen
         */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
                'title' => '<h3>Wijzig reservering</h3>',
                'Id' => trim($_POST['Id']),
                'Voornaam' => trim($_POST['Voornaam']),
                'Tussenvoegsel' => trim($_POST['Tussenvoegsel']),
                'Achternaam' => trim($_POST['Achternaam']),
                'Mobiel' => trim($_POST['Mobiel']),
                'Email' => trim($_POST['Email']),
                'IsVolwassen' => trim($_POST['IsVolwassen']),
                'VoornaamError' => '',
                'AchternaamError' => '',
                'MobielError' => '',
                'EmailError' => '',
                'optieError' => '',
                'IsVolwassenError' => ''
            ];

            /**
             * Valideer de ingevulde formulier waarden met de method
             */
            $data = $this->validateCreateForm($data);

            /**
             * Check of er geen validatie error is
             */
            if (
                empty($data['VoornaamError']) && 
                empty($data['AchternaamError']) && 
                empty($data['MobielError']) && 
                empty($data['EmailError']) &&
                empty($data['IsVolwassenError'])
            ) {
        
                /**
                 * Als er een update heeft plaatsgevonden
                 */
                if ($this->klantModel->updateKlant($data)) {
                    /**
                     * Dan een melding dat de gegevens zijn gewijzigd
                     */
                    echo "<div class='alert alert-success' role='alert'>
                            Uw gegevens zijn gewijzigd.
                        </div>";
                    header("Refresh:3; url=" . URLROOT . "/klanten/index");
                } else {
                    /**
                     * Anders de melding dat er een interne servererror heeft plaatsgevonden
                     */
                    echo "<div class='alert alert-danger' role='alert'>
                            Er heeft een interne servererror plaatsgevonden<br>probeer het later nog eens...
                        </div>";
                    header("Refresh:3; url=" . URLROOT . "/klanten/index");
                }
            }
            /**
             * Stuur het $data array met de validatie error meldingen naar de pagina update
             */
            $this->view("klanten/update", $data);
        } else {
            /**
             * Wanneer we van de reserveringen/index.php pagina afkomen dan sturen we het opgehaalde 
             * record naar de reserveringen/update.php pagina d.m.v. het $data array.
             */
            $row = $this->klantModel->getSingleKlant($Id);
            //var_dump($row);exit();
            $data = [
                'title' => '<h3>Update reservering</h3>',
                'Id' => $row->Id,
                'Voornaam' => $row->Voornaam,
                'Tussenvoegsel' => $row->Tussenvoegsel,
                'Achternaam' => $row->Achternaam,
                'Mobiel' => $row->Mobiel,
                'Email' => $row->Email,
                'IsVolwassen' => $row->IsVolwassen,
                'VoornaamError' => '',
                'AchternaamError' => '',
                'MobielError' => '',
                'EmailError' => '',
                'IsVolwassenError' => ''
            ];
            
            $this->view("klanten/update", $data);
            
        }    
        
        
    }
    private function validateCreateForm($data) {
        if (empty($data['Voornaam'])) {
        $data['VoornaamError'] = 'U heeft nog geen voornaam ingevuld';
        }

        if (empty($data['Achternaam'])) {
        $data['AchternaamError'] = 'U heeft nog geen achternaam ingevuld';
        }

        if (empty($data['Mobiel'])) {
            $data['MobielError'] = 'U heeft nog geen telefoonnummer ingevuld';
            }

        if (empty($data['Email'])) {
            $data['EmailError'] = 'U heeft nog geen e-mail ingevuld';
            }
        if (empty($data['IsVolwassen'])) {
            $data['IsVolwassenError'] = 'U heeft nog geen optie ingevuld';
            }
        return $data;
    }


}