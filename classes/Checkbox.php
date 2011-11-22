<?php
class Checkbox implements iElement {
	
	private $label;
	private $name;
	private $id;
	private $value;
	private $html;
	
	//Set the appropriate attributes based on the parameters
	function __construct($label, $name, $id, $value) {
		$this->label = $label;
		$this->name = $name;
		$this->id = $id;
		$this->value = $value;
	}
	
	//Checks the attributes, generates a label, and creates the element
	public function constructElement() {
		//TODO Add support for cols/rows
		Util::checkAttributes($this->value,$this->name, $this->id, "checkbox");
		$this->html .= Util::checkLabel($this->label, "<input type='checkbox'$this->name$this->id$this->value />");
		return $this->html;
	}
}