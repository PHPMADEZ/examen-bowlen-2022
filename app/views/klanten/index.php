<?php 
  require APPROOT . '/views/includes/header.php';
  echo $data["title"]; 
?>
<table class = "table table-striped">
  <thead>
    <th>Voornaam</th>
    <th>Tussenvoegsel</th>
    <th>Achternaam</th>
    <th>Mobiel</th>
    <th>E-mail</th>
    <th>Volwassen</th>
    <th>Wijzigen</th>
  </thead>
  <tbody>
    <?=$data['klanten']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

<?php 
  require APPROOT . '/views/includes/footer.php';
?>
