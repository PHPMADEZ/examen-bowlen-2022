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
       // var_dump($reserveringen);
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
                        <td><a href='" . URLROOT . "/reserveringen/update/$value->id'><i class='bi bi-pencil-square'></i></a></td>
                        <td><a href='" . URLROOT . "/reserveringen/delete/$value->id'><i class='bi bi-x-square'></i></a></td>
                        </tr>";
        }


        $data = [
        'title' => '<h3>Reserveringsoverzicht</h3>',
        'reserveringen' => $rows
        ];
        $this->view('reserveringen/index', $data);
    }
    public function update($id = null)
    {
        /**
         * Check of we van het update formulier komen
         */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
                'title' => '<h3>Wijzig reservering</h3>',
                'id' => trim($_POST['id']),
                'voornaam' => trim($_POST['voornaam']),
                'achternaam' => trim($_POST['achternaam']),
                'tijd' => trim($_POST['tijd']),
                'datum' => trim($_POST['datum']),
                'optie' => trim($_POST['optie']),
                'voornaamError' => '',
                'achternaamError' => '',
                'tijdError' => '',
                'datumError' => '',
                'optieError' => ''
            ];

            /**
             * Valideer de ingevulde formulier waarden met de method
             */
            $data = $this->validateCreateForm($data);

            /**
             * Check of er geen validatie error is
             */
            if (
                empty($data['voornaamError']) && 
                empty($data['achternaamError']) && 
                empty($data['tijdError']) && 
                empty($data['datumError']) &&
                empty($data['optieError'])
            ) {
        
                /**
                 * Als er een update heeft plaatsgevonden
                 */
                if ($this->reserveringModel->updateReservering($data)) {
                    /**
                     * Dan een melding dat de gegevens zijn gewijzigd
                     */
                    echo "<div class='alert alert-success' role='alert'>
                            Uw gegevens zijn gewijzigd.
                        </div>";
                    header("Refresh:3; url=" . URLROOT . "/reserveringen/index");
                } else {
                    /**
                     * Anders de melding dat er een interne servererror heeft plaatsgevonden
                     */
                    echo "<div class='alert alert-danger' role='alert'>
                            Er heeft een interne servererror plaatsgevonden<br>probeer het later nog eens...
                        </div>";
                    header("Refresh:3; url=" . URLROOT . "/reserveringen/index");
                }
            }
            /**
             * Stuur het $data array met de validatie error meldingen naar de pagina update
             */
            $this->view("reserveringen/update", $data);
        } else {
            /**
             * Wanneer we van de reserveringen/index.php pagina afkomen dan sturen we het opgehaalde 
             * record naar de reserveringen/update.php pagina d.m.v. het $data array.
             */
            $row = $this->reserveringModel->getSingleReservering($id);
            //var_dump($row);exit();
            $data = [
                'title' => '<h3>Update reservering</h3>',
                'id' => $row->id,
                'voornaam' => $row->voornaam,
                'achternaam' => $row->achternaam,
                'tijd' => $row->tijd,
                'datum' => $row->datum,
                'optie' => $row->optie,
                'voornaamError' => '',
                'achternaamError' => '',
                'tijdError' => '',
                'datumError' => '',
                'optieError' => ''
            ];
            
            $this->view("reserveringen/update", $data);
            
        }    
        
    }

    public function delete($id) {
        if ($this->reserveringModel->deleteReservering($id)) {
            $data = [
                'deleteStatus' =>  "<div class='alert alert-danger' role='alert'>
                                        Het record is verwijderd
                                    </div>"
            ];
        } else {
            $data =[
                'deleteStatus' =>  "<div class='alert alert-danger' role='alert'>
                                        Interne servererror het record is niet verwijderd
                                    </div>"
            ];
        }
        $this->view("reserveringen/delete", $data);
        header("Refresh:3; url=" . URLROOT . "/reserveringen/index");
    }

    private function validateCreateForm($data) {
        if (empty($data['voornaam'])) {
        $data['voornaamError'] = 'U heeft nog geen naam ingevuld';
        }

        if (empty($data['achternaam'])) {
        $data['achternaamError'] = 'U heeft nog geen achternaam ingevuld';
        }

        if (empty($data['tijd'])) {
            $data['tijdError'] = 'U heeft nog geen tijd ingevuld';
            }

        if (empty($data['datum'])) {
            $data['datumError'] = 'U heeft nog geen datum ingevuld';
            }
        if (empty($data['optie'])) {
            $data['optieError'] = 'U heeft nog geen optie ingevuld';
            }
        return $data;
    }
    public function create() {
        /**
         * Default waarden voor de view create.php
         */

        $data = [
        'title' => '<h3>Voeg een nieuw reservering toe</h3>',
        'voornaam' => '',
        'achternaam' => '',
        'tijd' => '',
        'datum' => '',
        'optie' => '',
        'voornaamError' => '',
        'achternaamError' => '',
        'tijdError' => '',
        'datumError' => '',
        'optieError' => ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
            'title' => '<h3>Voeg een nieuw reservering toe</h3>',
            'voornaam' => trim($_POST['voornaam']),
            'achternaam' => trim($_POST['achternaam']),
            'tijd' => trim($_POST['tijd']),
            'datum' => trim($_POST['datum']),
            'optie' => trim($_POST['optie']),
            'voornaamError' => '',
            'achternaamError' => '',
            'tijdError' => '',
            'datumError' => '',
            'optieError' => ''
            ];

            $data = $this->validateCreateForm($data);
        
            if (empty($data['voornaamError']) && empty($data['achternaamError']) && empty($data['tijdError']) && empty($data['datumError']) && empty($data['optieError'])) {
                if ($this->reserveringModel->createReservering($_POST)) {
                    header("Location:" . URLROOT . "/reservering/index");
                } else {
                    echo "<div class='alert alert-danger' role='alert'>
                            Er heeft een interne servererror plaatsgevonden<br>probeer het later nog eens...
                        </div>";
                    header("Refresh:3; url=" . URLROOT . "/reserveringen/index");
                }
            }
        } 

        $this->view("reserveringen/create", $data);    
    }


}