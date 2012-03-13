<?php
abstract class Util {
	
	//Validation option and messages
	protected static $ignoreValidation;
	protected static $validationMessages = array();
	
	//Check to see what attributes are used/set
	protected function checkAttributes(&$value, &$name, &$id, $type) {
		//TODO add support for textarea cols/rows
		if(isset($value) && $type != "textarea") {
			$value = " value='$value'";
		}
		if(isset($name)) {
			$name = " name='$name'";
		}
		if(isset($id)) {
			if(preg_match('/\s/', $id) && self::$ignoreValidation === false) {
				//If an ID contains a space, add a message into the array
				self::$validationMessages[] = "An ID must not contain spaces to validate properly";
			}
			$id = " id='$id'";
		}
	}
	
	//Get an element's html to be used when generating the form
	protected function getHtml($element) {
		return $element->html;
	}
	
	//Add a label to the left of an input field
	protected function checkLabel($label, $field) {
		//If the label should be created, create it. If not, just return the field
		return (isset($label)) ? "<label>$label</label> $field" : $field;
	}
}
?>