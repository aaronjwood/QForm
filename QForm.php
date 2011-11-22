<?php
function __autoload($class) {
	require_once "classes/".$class.".php";
}

class QForm {
	private $formHtml;
	private $innerHtml;
	private $formMethod;
	private $formAction;
	private $formName;
	private $formElements = array();
	
	function __construct($method, $action, $name = null, $ignoreValidation = false) {
		$this->formMethod = $method;
		$this->formAction = $action;
		$this->formName = $name;
		Util::ignoreValidation($ignoreValidation);
	}
	
	//Adds elements to the form
	private function addElements() {
		if(!empty($this->formElements)) {
			foreach($this->formElements as $element) {
				$this->innerHtml .= $element;
			}
		}
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
	
	public function addElement($object) {
		$this->formElements[] = $object->constructElement();
	}
	
	public function newLine() {
		$this->formElements[] = "<br />";
	}
	
	//TODO create more classes to handle different element types
	
	//Adds a textarea with optional name and id attributes
	/*public function addTextArea($name = null, $id = null, $value = null, $label = null) {
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
	}*/
	
}