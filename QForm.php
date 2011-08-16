<?php
class Form {
	private $ignoreValidation;
	private $formHtml;
	private $innerHtml;
	private $formMethod;
	private $formAction;
	private $formName;
	private $formElements = array();
	
	public function __construct($name = null, $method = "post", $action = null, $ignoreVal = false) {
		$this->formMethod = $method;
		$this->formAction = $action;
		$this->formName = $name;
		$this->ignoreValidation = $ignoreVal;
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
	
	//Adds a text field with optional name and id attributes
	//TODO needs a label and potentially positioning for the label
	public function addTextField($name = null, $id = null, $value = null) {
		$this->checkAttributes($value, $name, $id, "textfield");
		$this->formElements[] = "<input type='text'$name$id$value />";
	}
	
	//Adds a textarea with optional name and id attributes
	//TODO needs a label and potentially positioning for the label
	public function addTextArea($name = null, $id = null, $value = null) {
		$this->checkAttributes($value, $name, $id, "textarea");
		$this->formElements[] = "<textarea $name$id>$value</textarea>";
	}
	
	//Adds a checkbox with optional name and id attributes
	//TODO needs a label and potentially positioning for the label
	public function addCheckbox($name = null, $id = null, $value = null) {
		$this->checkAttributes($value, $name, $id, "checkbox");
		$this->formElements[] = "<input type='checkbox'$name$id$value />";
	}
	
	//Adds a radio button with optional name and id attributes
	//TODO needs a label and potentially positioning for the label
	public function addRadioButton($name = null, $id = null, $value = null) {
		$this->checkAttributes($value, $name, $id, "radio");
		$this->formElements[] = "<input type='radio'$name$id$value />";
	}
	
	public function addPassword($name = null, $id = null, $value = null) {
		$this->checkAttributes($value, $name, $id, "password");
		$this->formElements[] = "<input type='password'$name$id$value />";
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