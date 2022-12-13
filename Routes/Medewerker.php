<?php
include "../Models/DB.php";
include "../Models/Medewerker.php";
include "../Controller/Medewerker.php";



if (isset($_POST['insertKlant']))
{
    
    $nieuweklant = new MedewerkerController();

    $voornaam = $_POST['voornaam'];
    $achternaam= $_POST['achternaam'];
    $geboortedatum = $_POST['geboortedatum'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];


    $nieuweklant->addKlant($voornaam, $achternaam, $geboortedatum, $adres,  $email, $telefoonnummer);

    header("location: /views/index.php?=klantToegevoegd");
}
else {
    echo "Er is iets fout gegaan";
}


//delete klant
if (isset($_POST['deleteKlant']))
{
    $klant = new MedewerkerController();
    $id = $_GET['id'];
    $klant->deleteKlantFromPersoon($id);
    header("location: /views/index.php?=klantVerwijderd");
}
else {
    echo "Er is iets fout gegaan";
}


