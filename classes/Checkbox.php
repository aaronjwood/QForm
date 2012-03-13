<?php
class Checkbox extends Element {
	
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
		//Util::checkAttributes($this->value,$this->name, $this->id, "checkbox");
		$this->checkAttributes($this->value,$this->name, $this->id, "checkbox");
		$this->html .= $this->checkLabel($this->label, "<input type='checkbox'$this->name$this->id$this->value />");
	}
}
?>