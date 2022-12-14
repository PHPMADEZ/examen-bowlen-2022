<?php 
  require APPROOT . '/views/includes/header.php';
  echo $data["title"]; 
?>
<table class = "table table-striped">
  <thead>
    <th>Voornaam</th>
    <th>Tussenvoegsel</th>
    <th>Achternaam</th>
    <th>Aantalpunten</th>
    <th>Datum</th>
  </thead>
  <tbody>
    <?=$data['scores']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

<?php 
  require APPROOT . '/views/includes/footer.php';
?>
