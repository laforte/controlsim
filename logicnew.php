<?php
//Originator: M.Hoekstra
//Filename: logicnew.php
//Date last edit:04-10-2016
//File purpose: PHP to make new logics in the xml
/*
rev 1.0 04-10-2016:basic made to make new logics
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
$xml=simplexml_load_file("controllogic.xml") or die("Error: Cannot create object");


//process edited data
$file = "controllogic.xml";
if(isset($_POST['submit'])){ //check if form was submitted
$sxe = new SimpleXMLElement($xml->asXML());

//make xml items
$logicname = $_POST['logicname'];
$description = $_POST['description'];
$firstparam = $_POST['firstparam'];
$firstparamcv = $_POST['firstparamcv'];
$secondparam = $_POST['secondparam'];
$secondparamcv = $_POST['secondparamcv'];
$thirdparam = $_POST['thirdparam'];
$thirdparamcv = $_POST['thirdparamcv'];
$fourthparam = $_POST['fourthparam'];
$fourthparamcv = $_POST['fourthparamcv'];
$fifthparam = $_POST['fifthparam'];
$fifthparamcv = $_POST['fifthparamcv'];
$operatorone = $_POST['operatorone'];
$operatortwo = $_POST['operatortwo'];
$operatorthree = $_POST['operatorthree'];
$operatorfour = $_POST['operatorfour'];
$result = "0";


$logic = $sxe->addChild('logic');
$logic->addAttribute('name', $logicname);
$name = $logic->addChild('name',$logicname);
$description  = $logic->addChild('description',$description);
$firstparam  = $logic->addChild('firstparam',$firstparam);
$firstparamcv  = $logic->addChild('firstparamcv',$firstparamcv);
$secondparam  = $logic->addChild('secondparam',$secondparam);
$secondparamcv  = $logic->addChild('secondparamcv',$secondparamcv);
$thirdparam  = $logic->addChild('thirdparam',$thirdparam);
$thirdparamcv  = $logic->addChild('thirdparamcv',$thirdparamcv);
$fourthparam  = $logic->addChild('fourthparam',$fourthparam);
$fourthparamcv  = $logic->addChild('fourthparamcv',$fourthparamcv);
$fifthparam  = $logic->addChild('fifthparam',$fifthparam);
$fifthparamcv  = $logic->addChild('fifthparamcv',$fifthparamcv);
$operatorone  = $logic->addChild('operatorone',$operatorone);
$operatortwo  = $logic->addChild('operatortwo',$operatortwo);
$operatorthree  = $logic->addChild('operatorthree',$operatorthree);
$operatorfour  = $logic->addChild('operatorfour',$operatorfour);
$result  = $logic->addChild('result',$result);


//save data
$sxe->asXML("controllogic.xml"); 




echo "<div class='alert alert-success'>
    <strong>New data input completed!</strong> The new data is now saved.
  </div>";
  echo
  "<a href='controllers.php' type='button' class='btn btn-default'>Back to overview</a>" ;
  exit;
} 
?>
<?php foreach ($xml->children() as $controlblocks) ;?>

<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-2">
<form action="" method="post">
	<div class="form-group">
		<label for="logicname">Logic-name:</label>
		<input type="text" name="logicname" class="form-control" id="logicname">
	</div>
	<div class="form-group">
		<label for="description">Description:</label>
		<input type="text" class="form-control" name="description" id="description">
	</div>
	<div class="form-group">
		<label for="Firstparam">Firstparam:</label>
		<input type="text" class="form-control" name="firstparam" id="firstparam" >
	</div>
	<div class="form-group">
		<label for="firstparamcv">Firstparam cv:</label>
		<select class="form-control" name="firstparamcv" id="firstparamcv" >
  <option value="">None</option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
</select>
</div>
<div class="form-group">
		<label for="secondparam">secondparam:</label>
		<input type="text" class="form-control" name="secondparam" id="secondparam">
	</div>
	<div class="form-group">
		<label for="secondparamcv">Secondparam cv:</label>
		<select class="form-control" name="secondparamcv" id="secondparamcv">
   <option value="">None</option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
</select>
</div>
<div class="form-group">
		<label for="thirdparam">thirdparam:</label>
		<input type="text" class="form-control" name="thirdparam" id="thirdparam">
	</div>
	<div class="form-group">
		<label for="thirdparamcv">thirdparam cv:</label>
		<select class="form-control" name="thirdparamcv" id="thirdparamcv">
   <option value="">None</option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
</select>
	</div>
	<div class="form-group">
		<label for="fourthparam">fourthparam:</label>
		<input type="text" class="form-control" name="fourthparam" id="fourthparam">
	</div>
	<div class="form-group">
		<label for="fourthparamcv">fourthparam cv:</label>
		<select class="form-control" name="fourthparamcv" id="fourthparamcv">
   <option value="">None</option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
</select>
	</div>
	<div class="form-group">
		<label for="fifthparam">fifthparam:</label>
		<input type="text" class="form-control" name="fifthparam" id="fifthparam">
	</div>
	<div class="form-group">
		<label for="fifthparamcv">fifthparam cv:</label>
		<select class="form-control" name="fifthparamcv" id="fifthparamcv">
   <option value="">None</option>
  <option value="PV">PV</option>
  <option value="OP">OP</option>
  <option value="SP">SP</option>
</select>
	</div>
	<div class="form-group">
		<label for="operatorone">operatorone:</label>
		<input type="text" class="form-control" name="operatorone" id="operatorone">
	</div>
	<div class="form-group">
		<label for="operatortwo">operatortwo:</label>
		<input type="text" class="form-control" name="operatortwo" id="operatortwo">
	</div>
	<div class="form-group">
		<label for="operatorthree">operatorthree:</label>
		<input type="text" class="form-control" name="operatorthree" id="operatorthree">
	</div>
	<div class="form-group">
		<label for="operatorfour">operatorfour:</label>
		<input type="text" class="form-control" name="operatorfour" id="operatorfour">
	</div>
	
  
		<button type="submit" name="submit" value="Submit" class="btn btn-default">Submit</button>&nbsp;&nbsp; <a href="controllers.php" type="button" class="btn btn-default">Back</a>
</form>

</div>