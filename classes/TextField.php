<?php
class TextField implements iElement {
	
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
		 Util::checkAttributes($this->value,$this->name, $this->id, "textfield");
		$this->html .= Util::checkLabel($this->label, "<input type='text'$this->name$this->id$this->value />");
		return $this->html;
	}
}
?>