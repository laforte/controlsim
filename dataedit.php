<?php
//Originator: M.Hoekstra
//Filename: Dataedit.php
//Date last edit:28-08-2016
//File purpose: PHP to edit data to xml
/*
rev 1.0 28-08-2016:
*/

?>

<?php

//read xml file
$xml=simplexml_load_file("controldata.xml") or die("Error: Cannot create object");


?>
<div class="row">
<div class="col-sm-4">
<form>
  <div class="form-group">
    <label for="tagname">Tag-name:</label>
    <input type="text" class="form-control" id="tagname" value="<?php echo $xml->controldata->tag;?>">
	
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
