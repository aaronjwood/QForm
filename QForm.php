<?php
function __autoload($class) {
	if($class == "Element") {
		require_once "abstract/".$class.".php";
	}
	else {
		require_once "classes/".$class.".php";
	}
}

class QForm extends Util {
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
		self::$ignoreValidation = $ignoreValidation;
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
		//If the instance is not set to ignore validation and the message array is not empty, report the validation issue
		if(self::$ignoreValidation === false && !empty(self::$validationMessages)) {
			foreach(self::$validationMessages as $message) {
				$this->formHtml .= $message."<br />";
			}
		}
		else {
			$this->addElements();
			$this->formHtml = "
				<form method='$this->formMethod' name='$this->formName' action='$this->formAction'>
					<fieldset>
						$this->innerHtml
					</fieldset>
				</form>";
		}
		echo $this->formHtml;
	}
	
	//TODO needs type checking! Only objects that are also of type iElement can be passed!
	public function addElement($element) {
		$this->formElements[] = self::getHtml($element);
	}
	
	public function newLine() {
		$this->formElements[] = "<br />";
	}
	
}
?>
