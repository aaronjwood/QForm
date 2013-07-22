<?php

class TextArea extends Element {
	
	//Checks the attributes, generates a label, and creates the element
	protected function constructElement() {
		
		//TODO Add support for cols/rows
		$this->checkAttributes($this->value,$this->name, $this->id, "textarea");
		$this->html .= $this->checkLabel($this->label, "<textarea $this->name$this->id>$this->value</textarea>");
	}
	
}

?>