<?php
abstract class Util {
	
	private $validate;
	
	protected function ignoreValidation($bool) {
		$this->validate = $bool;
	}
	
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
			if(preg_match('/\s/', $id) && $this->validate == false) {
				//TODO Don't kill the script; find better way to handle this issue
				die("An ID must not contain spaces to validate properly");
			}
			$id = " id='$id'";
		}
	}
	
	//Add a label to the left of an input field
	protected function checkLabel($label, $field) {
		return (isset($label)) ? "<label>$label</label> $field" : $field;
	}
}
?>