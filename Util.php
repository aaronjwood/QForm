<?php
class Util {
	
	//Should we validate the form or not?
	private static $ignoreValidation;
	
	//Setter
	public static function ignoreValidation($bool) {
		self::$ignoreValidation = $bool;
	}
	
	//Check to see what attributes are used/set
	public static function checkAttributes(&$value, &$name, &$id, $type) {
		if(isset($value) && $type != "textarea") {
			$value = " value='$value'";
		}
		if(isset($name)) {
			$name = " name='$name'";
		}
		if(isset($id)) {
			if(preg_match('/\s/', $id) && self::$ignoreValidation === false) {
				//TODO Don't kill the script; find better way to handle this issue
				die("An ID must not contain spaces to validate properly");
			}
			$id = " id='$id'";
		}
	}
	
	//Add a label to the left of an input field
	public static function checkLabel($label, $field) {
		return (isset($label)) ? "<label>$label</label> $field" : $field;
	}
}
?>