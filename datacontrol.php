<?php
//Originator: M.Hoekstra
//Filename: datacontrol.php
//Date last edit:28-08-2016
//File purpose: PHP page to manage all controllers
/*
rev 1.0 28-08-2016: table made with date from controldata.xml
*/

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});
  
</script> 
<?php
$xml=simplexml_load_file("controldata.xml") or die("Error: Cannot create object");

?>
<div class="row">
<div class="col-sm-4">
<table class="table table-hover">
  <thead>
    <tr>
      <th>tag-name</th>
      <th>mode</th>
      <th>pv</th>
      <th>sp</th>
      <th>op</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($xml->children() as $controldata) :?>
    <tr data-href="dataedit.php?tag=<?php echo $controldata->tag; ?>">
      <td width="100px"><?php echo $controldata->tag; ?></td>
      <td width="100px"><?php echo $controldata->mode; ?></td>
      <td width="100px"><?php echo $controldata->pv; ?></td>
      <td width="100px"><?php echo $controldata->sp; ?></td>
      <td width="100px"><?php echo $controldata->op; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
</div>