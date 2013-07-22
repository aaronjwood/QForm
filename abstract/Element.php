<?php

abstract class Element extends QForm {
	
	//GLOBAL ATTRIBUTES
	protected $accesskey;
	protected $class;
	protected $contenteditable; //HTML5
	protected $contextmenu; //HTML5
	protected $dir;
	protected $draggable; //HTML5
	protected $dropzone; //HTML5
	protected $hidden; //HTML5
	protected $id;
	protected $lang;
	protected $spellcheck; //HTML5
	protected $style;
	protected $tabindex;
	protected $title;
	protected $translate; //HTML5
	
	//ELEMENT ATTRIBUTES
	protected $accept;
	protected $alt;
	protected $autocomplete; //HTML5
	protected $autofocus; //HTML5
	protected $checked;
	protected $disabled;
	protected $form; //HTML5
	protected $formaction; //HTML5
	protected $formenctype; //HTML5
	protected $formmethod; //HTML5
	protected $formnovalidate; //HTML5
	protected $formtarget; //HTML5
	protected $height; //HTML5
	protected $list; //HTML5
	protected $max; //HTML5
	protected $maxlength;
	protected $min; //HTML5
	protected $multiple; //HTML5
	protected $name;
	protected $pattern; //HTML5
	protected $placeholder; //HTML5
	protected $readonly;
	protected $required; //HTML5
	protected $size;
	protected $src;
	protected $step; //HTML5
	protected $type;
	protected $value;
	protected $width; //HTML5
	
	protected $label;
	protected $html;
	
	/**
	 * Creates a label and sets the appropriate attributes based on the parameters
	 * @param string $label
	 * @param string $name
	 * @param string $id
	 * @param string $value
	 */
	function __construct($attributes, $label = null) {
		$this->name = $attributes['name'];
		$this->id = $attributes['id'];
		$this->value = $attributes['value'];
		$this->label = $label;
		$this->constructElement();
	}
	
	/**
	 * Checks the attributes used, generates a label, and creates the element
	 */
	abstract protected function constructElement();
	
}

?>
