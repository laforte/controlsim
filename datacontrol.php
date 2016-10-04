<?php
//Originator: M.Hoekstra
//Filename: datacontrol.php
//Date last edit:31-08-2016
//File purpose: PHP page to manage all controllers
/*
rev 3.0 31-08-2016: Added back button and reload button.
rev 2.0 29-08-2016: Added button to make new controller
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
<script>
function myFunction() {
    location.reload();
}
</script>
<?php

//read xml file
$xml=simplexml_load_file("controldata.xml") or die("Error: Cannot create object");

?>
<!--Create table for data-->
<div class="row">
<div class="col-sm-1">
</div>
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
<!--foreach xml data-->
<?php foreach ($xml->tag as $tag):?>
<?php // foreach ($xml->children() as $controldata) :?>
<!--make href to edit site-->
    <tr data-href="dataedit.php?name=<?php echo $tag->name; ?>">
      <td width="100px"><?php echo $tag->name; ?></td>
      <td width="100px"><?php echo $tag->mode; ?></td>
      <td width="100px"><?php echo $tag->pv; ?></td>
      <td width="100px"><?php echo $tag->sp; ?></td>
      <td width="100px"><?php echo $tag->op; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<a href="datanew.php" type="button" class="btn btn-default">Add controller</a> <button onclick="myFunction()" class="btn btn-default">Reload data</button> <a href="instructor.php" type="button" class="btn btn-default">Back</a>
</div>
</div>