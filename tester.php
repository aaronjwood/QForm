<!DOCTYPE html>
<html>
<head>
<title>QForm Tester</title>
</head>
<body>
<?php
require("QForm.php");
$form = new QForm("POST", "tester.php");
$form->addTextField("Label", "Name", "ID", "Value");
$form->newLine();
$form->output();
?>
</body>
</html>