<?php

class Reset extends Element {
	
	//Checks the attributes, generates a label, and creates the element
	protected function constructElement() {
		$this->checkAttributes($this->value,$this->name, $this->id, "checkbox");
		$this->html .= $this->checkLabel($this->label, "<input type='reset'$this->name$this->id$this->value />");
	}
	
}

?>