<!--Example of Session  -->
<?php
session_start();
$Var ="test";
$Id = "786";
echo $Id;

echo $_SESSION["UserName"] = "Kaalchakra";
$_SESSION["UserData"] = array("UserName"=>"Kaalchakra","Password"=>"123","Gender"=>"Male");


$_SESSION['Cart'] = array("Prod_id"=>1,"Prod_Title"=>"Mobile");

?>
