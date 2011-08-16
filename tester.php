<!DOCTYPE html>
<html>
<head>
<title>QForm Tester</title>
</head>
<body>
<?php
require("Form.php");
$form = new Form("testform", "GET", "tester.php", true);
$form->addTextField("Some content...");
$form->addTextField();
$form->addTextArea("TEST");
$form->addTextArea();
$form->addCheckbox("testcheck", "checkname", "checkid");
$form->addRadioButton("test1", "I", "checkname");
$form->addRadioButton("test2", "B", "checkname");
$form->addPassword("NAME", "ID test", "VALUE");
$form->addPassword();
$form->output();
?>
</body>
</html>