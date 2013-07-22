<?php

class Radio extends Element {
	
	//Checks the attributes, generates a label, and creates the element
	protected function constructElement() {
		$this->checkAttributes($this->value,$this->name, $this->id, "radio");
		$this->html .= $this->checkLabel($this->label, "<input type='radio'$this->name$this->id$this->value />");
	}
	
}

?>