<?php

class Checkbox extends Element {
	
	/**
	 * Checks the attributes, generates a label, and creates the element
	 */
	protected function constructElement($attributes) {
		$this->checkAttributes($attributes, $this);
		$this->html .= $this->checkLabel($this->label, "<input type='checkbox'{$attributes['name']}{$attributes['id']}{$attributes['value']} />");
	}
	
}

?>