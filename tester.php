<!DOCTYPE html>
<html>
<head>
<title>QForm Tester</title>
</head>
<body>
<?php
require("QForm.php");
$form = new QForm("POST", "tester.php");
$textField = new TextField("Text Field", "TextFieldName", "TextFieldID", "VALUE");
$form->addElement($textField);
$form->newLine();
$textArea = new TextArea("Text Area", "TextAreaName", "TextAreaID", "VALUE");
$form->addElement($textArea);
$form->output();
?>
</body>
</html>