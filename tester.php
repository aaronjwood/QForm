<!DOCTYPE html>
<html>
<head>
<style type="text/css">
label {
	
}
</style>
<title>QForm Tester</title>
</head>
<body>
<?php
require("QForm.php");
$form = new QForm("formName", "GET", "tester.php");
$form->addTextField("textfieldOneName", "textfieldOneID", "textfieldOneValue", "textfieldOneLabel");
$form->newLine();
$form->addTextField("textfieldTwoName", "textfieldTwoID", "textfieldTwoValue");
$form->newLine();
$form->addTextField();
$form->newLine();
$form->addTextArea("textareaName", "textareaID", "textareaValue");
$form->newLine();
$form->addTextArea();
$form->newLine();
$form->addCheckbox("checkboxName", "checkboxID", "checkboxValue");
$form->newLine();
$form->addRadioButton("radioOneName", "radioOneID", "radioOneValue");
$form->newLine();
$form->addRadioButton("radioTwoName", "radioTwoID", "radioTwoValue");
$form->newLine();
$form->addPassword("passwordName", "passwordID", "passwordValue");
$form->newLine();
$form->addPassword();
$form->output();
?>
</body>
</html>