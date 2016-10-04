<?php
//Originator: M.Hoekstra
//Filename: logicedit.php
//Date last edit:03-10-2016
//File purpose: PHP to edit/delete data in xml file controlllogic.xml
/*

rev 1.0 03-10-2016: basic made to edit/delete logic
*/

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php

//get data from url and make variable
$logic = $_GET['logicname'];
//read xml file and load the correct data to edit
$xml=simplexml_load_file("controllogic.xml") or die("Error: Cannot create object");
$node = $xml->xpath("//logic[@name='$logic']")[0];

//process edited data
$file = "controllogic.xml";

if(isset($_POST['submit'])){ //check if form was submitted
//save all data in form
$node->description = $_POST['description'];
$node->firstparam = $_POST['firstparam'];
$node->firstparamcv = $_POST['firstparamcv'];
$node->secondparam = $_POST['secondparam'];
$node->secondparamcv = $_POST['secondparamcv'];
$node->thirdparam = $_POST['thirdparam'];
$node->thirdparamcv = $_POST['thirdparamcv'];
$node->fourthparam = $_POST['fourthparam'];
$node->fourthparamcv = $_POST['fourthparamcv'];
$node->fifthparam = $_POST['fifthparam'];
$node->fifthparamcv = $_POST['fifthparamcv'];
$node->operatorone = $_POST['operatorone'];
$node->operatortwo = $_POST['operatortwo'];
$node->operatorthree = $_POST['operatorthree'];
$node->operatorfour = $_POST['operatorfour'];
$node->result = $_POST['result'];
file_put_contents($file, $xml->asXML());
//show message
echo "<div class='alert alert-success'>
    <strong>Edit completed!</strong> The new data is now saved.
  </div>";

}
?>

<?php 

//script for deleting the tag

if(isset($_POST['delete'])){ //check if form was submitted


//Use XPath to find target node for removal
$target = $xml->xpath("logic[@name='$logic']");

//If target does not exist (already deleted by someone/thing else), halt
if(!$target)
return; //Returns null

//Import simpleXml reference into Dom & do removal (removal occurs in simpleXML object)
$domRef = dom_import_simplexml($target[0]); //Select position 0 in XPath array
$domRef->parentNode->removeChild($domRef);

//Format XML to save indented tree rather than one line and save
$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = true;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('controllogic.xml');

//show message
echo "<div class='w3-panel w3-red'>
  <h3>Deleted!</h3>
  <p>Tag is deleted</p>
</div>";
echo "<a href='controllers.php' type='button' class='btn btn-default'>Back to overview</a>";
exit;
}

?>
<?php foreach ($xml->children() as $controldata) ;?>

<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-2">
<form action="" method="post">
	<div class="form-group">
		<label for="logic">Logic-name:</label>
		<input type="text" name="logic" class="form-control" id="logic" value="<?php echo $node->name; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="description">Description:</label>
		<input type="text" class="form-control" name="description" id="description" value="<?php echo $node->description; ?>">
	</div>
	<div class="form-group">
		<label for="Firstparam">Firstparam:</label>
		<input type="text" class="form-control" name="firstparam" id="firstparam" value="<?php echo $node->firstparam; ?>">
	</div>
	<div class="form-group">
		<label for="firstparamcv">Firstparam cv:</label>
		<select class="form-control" name="firstparamcv" id="firstparamcv" value="<?php echo $node->firstparamcv; ?>">
  <option value="<?php echo $node->firstparamcv; ?>"><?php echo $node->firstparamcv; ?></option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
  <option value="">None</option>
</select>
</div>
<div class="form-group">
		<label for="secondparam">secondparam:</label>
		<input type="text" class="form-control" name="secondparam" id="secondparam" value="<?php echo $node->secondparam; ?>">
	</div>
	<div class="form-group">
		<label for="secondparamcv">Secondparam cv:</label>
		<select class="form-control" name="secondparamcv" id="secondparamcv" value="<?php echo $node->secondparamcv; ?>">
  <option value="<?php echo $node->secondparamcv; ?>"><?php echo $node->secondparamcv; ?></option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
  <option value="">None</option>
</select>
</div>
<div class="form-group">
		<label for="thirdparam">thirdparam:</label>
		<input type="text" class="form-control" name="thirdparam" id="thirdparam" value="<?php echo $node->thirdparam; ?>">
	</div>
	<div class="form-group">
		<label for="thirdparamcv">thirdparam cv:</label>
		<select class="form-control" name="thirdparamcv" id="thirdparamcv" value="<?php echo $node->thirdparamcv; ?>">
  <option value="<?php echo $node->thirdparamcv; ?>"><?php echo $node->thirdparamcv; ?></option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
  <option value="">None</option>
</select>
	</div>
	<div class="form-group">
		<label for="fourthparam">fourthparam:</label>
		<input type="text" class="form-control" name="fourthparam" id="fourthparam" value="<?php echo $node->fourthparam; ?>">
	</div>
	<div class="form-group">
		<label for="fourthparamcv">fourthparam cv:</label>
		<select class="form-control" name="fourthparamcv" id="fourthparamcv" value="<?php echo $node->fourthparamcv; ?>">
  <option value="<?php echo $node->fourthparamcv; ?>"><?php echo $node->fourthparamcv; ?></option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
  <option value="">None</option>
</select>
	</div>
	<div class="form-group">
		<label for="fifthparam">fifthparam:</label>
		<input type="text" class="form-control" name="fifthparam" id="fifthparam" value="<?php echo $node->fifthparam; ?>">
	</div>
	<div class="form-group">
		<label for="fifthparamcv">fifthparam cv:</label>
		<select class="form-control" name="fifthparamcv" id="fifthparamcv" value="<?php echo $node->fifthparamcv; ?>">
  <option value="<?php echo $node->fifthparamcv; ?>"><?php echo $node->fifthparamcv; ?></option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
  <option value="">None</option>
</select>
	</div>
	<div class="form-group">
		<label for="operatorone">operatorone:</label>
		<input type="text" class="form-control" name="operatorone" id="operatorone" value="<?php echo $node->operatorone; ?>">
	</div>
	<div class="form-group">
		<label for="operatortwo">operatortwo:</label>
		<input type="text" class="form-control" name="operatortwo" id="operatortwo" value="<?php echo $node->operatortwo; ?>">
	</div>
	<div class="form-group">
		<label for="operatorthree">operatorthree:</label>
		<input type="text" class="form-control" name="operatorthree" id="operatorthree" value="<?php echo $node->operatorthree; ?>">
	</div>
	<div class="form-group">
		<label for="operatorfour">operatorfour:</label>
		<input type="text" class="form-control" name="operatorfour" id="operatorfour" value="<?php echo $node->operatorfour; ?>">
	</div>
	<div class="form-group">
		<label for="result">result:</label>
		<input type="text" name="result" class="form-control" id="result" value="<?php echo $node->result; ?>" readonly>
	</div>
	
  
		<button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button> <button type="submit" name="delete" value="delete" class="btn btn-default">Delete</button> <a href="controllers.php" type="button" class="btn btn-default">Back</a>
</form>

</div>
