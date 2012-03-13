<?php
class TextField extends Element {
	
	private $label;
	private $name;
	private $id;
	private $value;

	protected $html;
	
	//Set the appropriate attributes based on the parameters
	function __construct($label, $name, $id, $value) {
		$this->label = $label;
		$this->name = $name;
		$this->id = $id;
		$this->value = $value;
		$this->constructElement();
	}
	
	//Checks the attributes, generates a label, and creates the element
	protected function constructElement() {
		$this->checkAttributes($this->value,$this->name, $this->id, "textfield");
		$this->html .= $this->checkLabel($this->label, "<input type='text'$this->name$this->id$this->value />");
	}
}
?>
