<?php
include "../Models/DB.php";
include "../Models/Medewerker.php";
include "../Controller/Medewerker.php";
/*
# Inserts a new klant into the database
@ information from the form gets sent here
*/
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
/*
# Deletes a klant from the database
@ id's get logged and deleted accordinly
*/
if (isset($_POST['deleteKlant']))
{
    $klant = new MedewerkerController();
    $id = $_GET['id'];
    $klant->verwijderKlant($id);
    header("location: /views/index.php?=klantVerwijderd");
}
else {
    echo "Er is iets fout gegaan";
}
/*
#Update klant from the database
@ gets the id and updates the information
*/
if (isset($_POST['updateKlant']))
{
    $klant = new MedewerkerController();
    $kid = $_GET['id'];

    $klant->getUserID($kid);
    $kid = $klant->getUserID($kid);
    $voornaam = $_POST['voornaam'];
    $achternaam= $_POST['achternaam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];

    $klant->updateKlant($kid, $voornaam, $achternaam, $adres,  $email, $telefoonnummer);

    header("location: /views/index.php?=klantAangepast");
    
}
else {
    echo "Er is iets fout gegaan";
}


