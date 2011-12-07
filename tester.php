<!DOCTYPE html>
<html>
<head>
<title>QForm Tester</title>
</head>
<body>
<?php
require("QForm.php");
$form = new QForm("POST", "tester.php");
$textField = new TextField("Text Field", "TextFieldName", "TextFieldID", "Text field value");
$form->addElement($textField);
$form->newLine();
$textArea = new TextArea("Text Area", "TextAreaName", "TextAreaID", "Textarea value");
$form->addElement($textArea);
$form->newLine();
$checkBox = new Checkbox("Checkbox", "CheckboxName", "CheckboxID", "Checkbox Value");
$form->addElement($checkBox);
$form->newLine();
$radioButton = new Radio("Radio Button", "RadioButtonName", "RadioButtonID", "Radio Button Value");
$form->addElement($radioButton);
$form->newLine();
$password = new Password("Password", "PasswordName", "PasswordID", "SomeValue");
$form->addElement($password);
$form->newLine();
$submit = new Submit("Submit", "SubmitName", "SubmitId", "Submit");
$form->addElement($submit);
$reset = new Reset("Reset", "ResetName", "ResetID", "Reset");
$form->addElement($reset);
$form->output();
?>
</body>
</html>