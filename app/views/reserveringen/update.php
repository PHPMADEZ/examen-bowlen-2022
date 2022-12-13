<?php
  require APPROOT . '/views/includes/header.php';
  echo $data['title']; 
?>

<form action="<?= URLROOT; ?>/reserveringen/update" method="post">
  <table>
    <tbody>
      <tr>
        <td>
          <label class= "form-label" for="name">Voornaam</label>          
          <input class="form-control" type="text" name="voornaam" id="voornaam" value="<?= $data["voornaam"]; ?>">
          <div class="errorForm"><?= $data['voornaamError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <label class= "form-label" for="achternaam">Achternaam</label>
          <input class="form-control" type="text" name="achternaam" id="achternaam" value="<?= $data["achternaam"]; ?>">
          <div class="errorForm"><?= $data['achternaamError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
         <label class= "form-label" for="tijd">Tijd</label>
         <input class="form-control" type="text" name="tijd" id="tijd" value="<?= $data["tijd"]; ?>">
         <div class="errorForm"><?= $data['tijdError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
         <label class= "form-label" for="datum">Datum</label>
         <input class="form-control" type="text" name="datum" id="datum" value="<?= $data["datum"]; ?>">
         <div class="errorForm"><?= $data['datumError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
         <label class= "form-label" for="optie">Optie</label>
         <input class="form-control" type="text" name="optie" id="optie" value="<?= $data["optie"]; ?>">
         <div class="errorForm"><?= $data['optieError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="id" value="<?= $data["id"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <input class="btn btn-primary btn-lg" type="submit" value="Verzenden">
        </td>
      </tr>
    </tbody>
  </table>

</form>