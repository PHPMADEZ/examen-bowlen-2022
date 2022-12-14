<?php
include "../Models/DB.php";
include "../Models/Medewerker.php";
include "../Controller/Medewerker.php";
/*
# Inserts a new klant into the database
@ information from the form gets sent here
*/

if (isset($_POST['updateScore']))
{
    $id = $_GET['id'];
    $nieuwescore = $_POST['Aantalpunten'];

    $medewerker = new MedewerkerController();
    $medewerker->editScore($id, $nieuwescore);
    
    header("Location: ../Views/index.php?action=succesvolgewijzgid");
   
}
else {
    echo "Er is iets fout gegaan";
}