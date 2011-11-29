<?php
class Checkbox extends Element {
	
	private $label;
	private $name;
	private $id;
	private $value;
	
	public $html;
	
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
		//TODO Add support for cols/rows
		Util::checkAttributes($this->value,$this->name, $this->id, "checkbox");
		$this->html .= Util::checkLabel($this->label, "<input type='checkbox'$this->name$this->id$this->value />");
	}
}
?>