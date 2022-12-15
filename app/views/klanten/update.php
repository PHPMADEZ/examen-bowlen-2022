-<?php
  require APPROOT . '/views/includes/header.php';
  echo $data['title']; 
?>

<form action="<?= URLROOT; ?>/klanten/update" method="post">
  <table>
    <tbody>
      <tr>
        <td>
          <label class= "form-label" for="Voornaam">Voornaam</label>          
          <input class="form-control" type="text" name="Voornaam" id="Voornaam" value="<?= $data["Voornaam"]; ?>">
          <div class="errorForm"><?= $data['VoornaamError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <label class= "form-label" for="Tussenvoegsel">Tussenvoegsel</label>          
          <input class="form-control" type="text" name="Tussenvoegsel" id="Tussenvoegsel" value="<?= $data["Tussenvoegsel"]; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label class= "form-label" for="Achternaam">Achternaam</label>
          <input class="form-control" type="text" name="Achternaam" id="Achternaam" value="<?= $data["Achternaam"]; ?>">
          <div class="errorForm"><?= $data['AchternaamError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
         <label class= "form-label" for="Mobiel">Mobiel</label>
         <input class="form-control" type="text" name="Mobiel" id="Mobiel" value="<?= $data["Mobiel"]; ?>">
         <div class="errorForm"><?= $data['MobielError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
         <label class= "form-label" for="Email">E-mail</label>
         <input class="form-control" type="email" name="Email" id="Email" value="<?= $data["Email"]; ?>">
         <div class="errorForm"><?= $data['EmailError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
         <label class= "form-label" for="IsVolwassen">Volwassen</label>
         <input class="form-control" type="text" name="IsVolwassen" id="IsVolwassen" value="<?= $data["IsVolwassen"]; ?>">
         <div class="errorForm"><?= $data['IsVolwassenError']; ?></div>
        </td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="Id" value="<?= $data["Id"]; ?>">
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