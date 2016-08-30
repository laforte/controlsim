<?php
//Originator: M.Hoekstra
//Filename: Dataedit.php
//Date last edit:28-08-2016
//File purpose: PHP to edit data to xml
/*
rev 1.0 28-08-2016:basic made to edit controllers
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
$tag = $_GET['name'];
//read xml file and load the correct data to edit
$xml=simplexml_load_file("controldata.xml") or die("Error: Cannot create object");
$node = $xml->xpath("//tag[@name='$tag']")[0];

//process edited data
$file = "controldata.xml";
if(isset($_POST['submit'])){ //check if form was submitted
//save all data in form
$node->mode = $_POST['mode'];
$node->pv = $_POST['pv'];
$node->sp = $_POST['sp'];
$node->op = $_POST['op'];
$node->p = $_POST['p'];
$node->i = $_POST['i'];
$node->d = $_POST['d'];
$node->ratio = $_POST['ratio'];
$node->pvh = $_POST['pvh'];
$node->pvhh = $_POST['pvhh'];
$node->pvhhh = $_POST['pvhhh'];
$node->pvl = $_POST['pvl'];
$node->pvll = $_POST['pvll'];
$node->pvlll = $_POST['pvlll'];
file_put_contents($file, $xml->asXML());
echo "New data is saved";
} 
?>
<?php foreach ($xml->children() as $controldata) ;?>

<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-2">
<form action="" method="post">
	<div class="form-group">
		<label for="tagname">Tag-name:</label>
		<input type="text" name="tagname" class="form-control" id="tagname" value="<?php echo $node->name; ?>" readonly>
	</div>
	<div class="form-group">
		<label for="mode">Mode:</label>
		<input type="text" class="form-control" name="mode" id="mode" value="<?php echo $node->mode; ?>">
	</div>
	<div class="form-group">
		<label for="mode">PV:</label>
		<input type="text" class="form-control" name="pv" id="pv" value="<?php echo $node->pv; ?>">
	</div>
	<div class="form-group">
		<label for="mode">SP:</label>
		<input type="text" class="form-control" name="sp" id="sp" value="<?php echo $node->sp; ?>">
	</div>
	<div class="form-group">
		<label for="mode">OP:</label>
		<input type="text" class="form-control" name="op" id="op" value="<?php echo $node->op; ?>">
	</div>
	<div class="form-group">
		<label for="mode">P:</label>
		<input type="text" class="form-control" name="p" id="p" value="<?php echo $node->p; ?>">
	</div>
	<div class="form-group">
		<label for="mode">i:</label>
		<input type="text" class="form-control" name="i" id="i" value="<?php echo $node->i; ?>">
	</div>
	<div class="form-group">
		<label for="mode">d:</label>
		<input type="text" class="form-control" name="d" id="d" value="<?php echo $node->d; ?>">
	</div>
	<div class="form-group">
		<label for="mode">ratio:</label>
		<input type="text" class="form-control" name="ratio" id="ratio" value="<?php echo $node->ratio; ?>">
	</div>
	<div class="form-group">
		<label for="mode">pvh:</label>
		<input type="text" class="form-control" name="pvh" id="pvh" value="<?php echo $node->pvh; ?>">
	</div>
	<div class="form-group">
		<label for="mode">pvhh:</label>
		<input type="text" class="form-control" name="pvhh" id="pvhh" value="<?php echo $node->pvhh; ?>">
	</div>
	<div class="form-group">
		<label for="mode">pvhhh:</label>
		<input type="text" class="form-control" name="pvhhh" id="pvhhh" value="<?php echo $node->pvhhh; ?>">
	</div>
	<div class="form-group">
		<label for="mode">pvl:</label>
		<input type="text" class="form-control" name="pvl" id="pvl" value="<?php echo $node->pvl; ?>">
	</div>
	<div class="form-group">
		<label for="mode">pvll:</label>
		<input type="text" class="form-control" name="pvll" id="pvll" value="<?php echo $node->pvll; ?>">
	</div>
	<div class="form-group">
		<label for="mode">pvlll:</label>
		<input type="text" class="form-control" name="pvlll" id="pvlll" value="<?php echo $node->pvlll; ?>">
	</div>
  
		<button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
</form>
<a href="datacontrol.php" type="button" class="btn btn-default">Back</a>
</div>
