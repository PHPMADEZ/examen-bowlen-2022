<?php 
  require APPROOT . '/views/includes/header.php';
  echo $data["title"]; 
?>
<a href="<?=URLROOT;?>/reserveringen/create">Nieuw record</a>
<table class = "table table-striped">
  <thead>
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>Tijd</th>
    <th>Datum</th>
    <th>Optie</th>
  </thead>
  <tbody>
    <?=$data['reserveringen']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

<?php 
  require APPROOT . '/views/includes/footer.php';
?>
