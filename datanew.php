<?php
//Originator: M.Hoekstra
//Filename: datanew.php
//Date last edit:29-08-2016
//File purpose: PHP to make new controllers in the xml
/*
rev 1.0 29-08-2016:basic made to make new controllers
*/

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php


//read xml file
$xml=simplexml_load_file("controldata.xml") or die("Error: Cannot create object");


//process edited data
$file = "controldata.xml";
if(isset($_POST['submit'])){ //check if form was submitted
$sxe = new SimpleXMLElement($xml->asXML());

//make xml items
$name = $_POST['tagname'];
$pv = $_POST['pv'];
$sp = $_POST['sp'];
$op = $_POST['op'];
$p = $_POST['p'];
$i = $_POST['i'];
$d = $_POST['d'];
$ratio = $_POST['ratio'];
$pvh = $_POST['pvh'];
$pvhh = $_POST['pvhh'];
$pvhhh = $_POST['pvhhh'];
$pvl = $_POST['pvl'];
$pvll = $_POST['pvll'];
$pvlll = $_POST['pvlll'];
$controldata = $sxe->addChild('controldata');
$tag = $controldata->addChild('tag');
$tag->addAttribute('name', $name);
$name  = $tag->addChild('name',$name);
$pv  = $tag->addChild('pv',$pv);
$sp  = $tag->addChild('sp',$sp);
$op  = $tag->addChild('op',$op);
$p  = $tag->addChild('p',$p);
$i  = $tag->addChild('i',$i);
$d  = $tag->addChild('d',$d);
$ratio  = $tag->addChild('ratio',$ratio);
$pvh  = $tag->addChild('pvh',$pvh);
$pvhh  = $tag->addChild('pvhh',$pvhh);
$pvhhh  = $tag->addChild('pvhhh',$pvhhh);
$pvl  = $tag->addChild('pvl',$pvl);
$pvll  = $tag->addChild('pvll',$pvll);
$pvlll  = $tag->addChild('pvlll',$pvlll);


//save data
$sxe->asXML("controldata.xml"); 




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
		<input type="text" name="tagname" class="form-control" id="tagname" value="xxXxxx">
	</div>
	<div class="form-group">
		<label for="mode">Mode:</label>
		<input type="text" class="form-control" name="mode" id="mode" value="MAN">
	</div>
	<div class="form-group">
		<label for="mode">PV:</label>
		<input type="text" class="form-control" name="pv" id="pv" value="0">
	</div>
	<div class="form-group">
		<label for="mode">SP:</label>
		<input type="text" class="form-control" name="sp" id="sp" value="0">
	</div>
	<div class="form-group">
		<label for="mode">OP:</label>
		<input type="text" class="form-control" name="op" id="op" value="0">
	</div>
	<div class="form-group">
		<label for="mode">P:</label>
		<input type="text" class="form-control" name="p" id="p" value="1">
	</div>
	<div class="form-group">
		<label for="mode">i:</label>
		<input type="text" class="form-control" name="i" id="i" value="1">
	</div>
	<div class="form-group">
		<label for="mode">d:</label>
		<input type="text" class="form-control" name="d" id="d" value="1">
	</div>
	<div class="form-group">
		<label for="mode">ratio:</label>
		<input type="text" class="form-control" name="ratio" id="ratio" value="1">
	</div>
	<div class="form-group">
		<label for="mode">pvh:</label>
		<input type="text" class="form-control" name="pvh" id="pvh" value="">
	</div>
	<div class="form-group">
		<label for="mode">pvhh:</label>
		<input type="text" class="form-control" name="pvhh" id="pvhh" value="">
	</div>
	<div class="form-group">
		<label for="mode">pvhhh:</label>
		<input type="text" class="form-control" name="pvhhh" id="pvhhh" value="">
	</div>
	<div class="form-group">
		<label for="mode">pvl:</label>
		<input type="text" class="form-control" name="pvl" id="pvl" value="">
	</div>
	<div class="form-group">
		<label for="mode">pvll:</label>
		<input type="text" class="form-control" name="pvll" id="pvll" value="">
	</div>
	<div class="form-group">
		<label for="mode">pvlll:</label>
		<input type="text" class="form-control" name="pvlll" id="pvlll" value="">
	</div>
  
		<button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>
</form>
<a href="datacontrol.php" type="button" class="btn btn-default">Back</a>
</div>