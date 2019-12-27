<?php 
require_once("includes/config.php");
if(!empty($_POST["caseid"])) {
  $caseid=$_POST["caseid"];
 
    $sql ="SELECT CaseName,id FROM tblcases WHERE (CaseNumber=:caseid)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':caseid', $caseid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
  foreach ($results as $result) {?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->CaseName);?></option>
<b>Case Name </b> 
<?php  
echo htmlentities($result->CaseName);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
 else{?>
  
<option class="others"> Invalid Case Number</option>
<?php
 echo "<script>$('#submit').prop('disabled',true);</script>";
}
}



?>
