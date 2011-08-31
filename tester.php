<!DOCTYPE html>
<html>
<head>
<title>QForm Tester</title>
</head>
<body>
<?php
require("QForm.php");
$form = new Form("testform", "GET", "tester.php", true);
$form->addTextField("textfieldName", "textfieldID", "textfieldValue");
$form->addTextField();
$form->addTextArea("textareaName", "textareaID", "textareaValue");
$form->addTextArea();
$form->addCheckbox("checkboxName", "checkboxID", "checkboxValue");
$form->addRadioButton("radioOneName", "radioOneID", "radioOneValue");
$form->addRadioButton("radioTwoName", "radioTwoID", "radioTwoValue");
$form->addPassword("passwordName", "passwordID", "passwordValue");
$form->addPassword();
$form->output();
?>
</body>
</html>