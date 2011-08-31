<?php
class QForm {
	private $ignoreValidation;
	private $formHtml;
	private $innerHtml;
	private $formMethod;
	private $formAction;
	private $formName;
	private $formElements = array();
	
	public function __construct($name = null, $method = "post", $action = null, $ignoreValidation = false) {
		$this->formMethod = $method;
		$this->formAction = $action;
		$this->formName = $name;
		$this->ignoreValidation = $ignoreValidation;
	}
	
	//Adds elements to the form
	private function addElements() {
		if(!empty($this->formElements)) {
			foreach($this->formElements as $element) {
				$this->innerHtml .= $element;
			}
		}
	}
	
	//Check to see what attributes are used/set
	private function checkAttributes(&$value, &$name, &$id, $type) {
		if(isset($value) && $type != "textarea") {
			$value = " value='$value'";
		}
		if(isset($name)) {
			$name = " name='$name'";
		}
		if(isset($id)) {
			if(preg_match('/\s/', $id) && $this->ignoreValidation === false) {
				die("An ID must not contain spaces to validate properly");
			}
			$id = " id='$id'";
		}
	}
	
	//Add a label to the left of an input field
	//TODO decide on positioning functionality
	private function checkLabel($label, $field) {
		return (isset($label)) ? "<label>$label</label> $field" : $field;
	}
	
	public function newLine() {
		$this->formElements[] = "<br />";
	}
	
	//Adds a text field with optional name and id attributes
	public function addTextField($name = null, $id = null, $value = null, $label = null) {
		$this->checkAttributes($value, $name, $id, "textfield");
		$this->formElements[] = $this->checkLabel($label, "<input type='text'$name$id$value />");
	}
	
	//Adds a textarea with optional name and id attributes
	public function addTextArea($name = null, $id = null, $value = null, $label = null) {
		$this->checkAttributes($value, $name, $id, "textarea");
		$this->formElements[] = $this->checkLabel($label, "<textarea $name$id>$value</textarea>");
	}
	
	//Adds a checkbox with optional name and id attributes
	public function addCheckbox($name = null, $id = null, $value = null, $label = null) {
		$this->checkAttributes($value, $name, $id, "checkbox");
		$this->formElements[] = $this->checkLabel($label, "<input type='checkbox'$name$id$value />");
	}
	
	//Adds a radio button with optional name and id attributes
	public function addRadioButton($name = null, $id = null, $value = null, $label = null) {
		$this->checkAttributes($value, $name, $id, "radio");
		$this->formElements[] = $this->checkLabel($label, "<input type='radio'$name$id$value />");
	}
	
	//Adds a password field with optional name and id attributes
	public function addPassword($name = null, $id = null, $value = null, $label = null) {
		$this->checkAttributes($value, $name, $id, "password");
		$this->formElements[] = $this->checkLabel($label, "<input type='password'$name$id$value />");
	}
	
	//Create the form on the page
	public function output() {
		$this->addElements();
		$this->formHtml = "
				<form method='$this->formMethod' name='$this->formName' action='$this->formAction'>
					<fieldset>
						$this->innerHtml
					</fieldset>
				</form>";
		echo $this->formHtml;
	}
}