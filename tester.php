<!DOCTYPE html>
<html>
	<head>
		<title>QForm Tester</title>
	</head>
	<body>
		<?php
		require("QForm.php");
		
		$form = new QForm("POST", "tester.php");
		
		$form->addElement(new TextField(array(
			"name" => "TextFieldName",
			"id" => "TextFieldId",
			"value" => "Text field value"
		), "Text Field"));
		$form->newLine();
		
		$form->addElement(new TextArea(array(
			"name" => "TextAreaName",
			"id" => "TextAreaId",
			"value" => "Text area value"
		), "Text Area"));
		$form->newLine();
		
		$form->addElement(new Checkbox(array(
			"name" => "CheckboxName",
			"id" => "CheckboxId",
			"value" => "Checkbox"
		), "Checkbox"));
		$form->newLine();
		
		$form->addElement(new Radio(array(
			"name" => "RadioName",
			"id" => "RadioId",
			"value" => "Radio"
		), "Radio Button"));
		$form->newLine();
		
		$form->addElement(new Password(array(
			"name" => "PasswordName",
			"id" => "PasswordId",
			"value" => "Password"
		), "Password"));
		$form->newLine();
		
		$form->addElement(new Submit(array(
			"name" => "SubmitName",
			"id" => "SubmitId",
			"value" => "Submit"
		), "Submit"));
		
		$form->addElement(new Reset(array(
			"name" => "ResetName",
			"id" => "ResetId",
			"value" => "Reset"
		), "Reset"));
		
		$form->output();
		?>
	</body>
</html>