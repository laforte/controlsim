<?php
//Originator: M.Hoekstra
//Filename: controllers.php
//Date last edit:02-10-2016
//File purpose: Page to add/remove/edit controllers/logics
/*
rev 1.0 02-10-2016: first page build.
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
$xml=simplexml_load_file("controllogic.xml") or die("Error: Cannot create object");

?>
<!--Create table for data-->
<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-6">
<table class="table table-hover">
  <thead>
    <tr>
      <th>controller name</th>
      <th>param 1</th>
      <th>param 1</th>
      <th>param 3</th>
      <th>param 4</th>
	  <th>param 5</th>
	  <th>result</th>
    </tr>
  </thead>
  <tbody>
<!--foreach xml data-->
<?php foreach ($xml->logic as $logic):?>
<?php // foreach ($xml->children() as $controldata) :?>
<!--make href to edit site-->
    <tr data-href="logicedit.php?logicname=<?php echo $logic->name; ?>">
      <td width="100px"><?php echo $logic->name; ?></td>
      <td width="100px"><?php echo $logic->firstparam . "." . $logic->firstparamcv; ?></td>
      <td width="100px"><?php echo $logic->secondparam . "." . $logic->secondparamcv; ?></td>
      <td width="100px"><?php echo $logic->thirdparam . "." . $logic->thirdparamcv; ?></td>
      <td width="100px"><?php echo $logic->fourthparam . "." . $logic->fourthparamcv; ?></td>
	  <td width="100px"><?php echo $logic->fifthparam . "." . $logic->fifthparamcv; ?></td>
	  <td width="100px"><?php echo $logic->result; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<a href="logicnew.php" type="button" class="btn btn-default">Add logic</a> <button onclick="myFunction()" class="btn btn-default">Reload data</button> <a href="instructor.php" type="button" class="btn btn-default">Back</a>
</div>
</div>