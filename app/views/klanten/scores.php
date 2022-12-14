<?php 
  require APPROOT . '/views/includes/header.php';
  echo $data["title"]; 
?>
<table class = "table table-striped">
  <thead>
    <th>Naam</th>
    <th>Datum</th>
    <th>Aantal Uur</th>
    <th>Begintijd</th>
    <th>Eindtijd</th>
    <th>Aantal volwassenen</th>
    <th>Aantal kinderen</th>
  </thead>
  <tbody>
    <?=$data['scores']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

<?php 
  require APPROOT . '/views/includes/footer.php';
?>
