<?php 
/**
	Admin Page Framework v3.8.7b02 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/custom-scrollbar>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CustomScrollbar_AdminPageFramework_Form_View___Generate_FieldInputName extends CustomScrollbar_AdminPageFramework_Form_View___Generate_FlatFieldName {
    public $sIndex = '';
    public function __construct() {
        $_aParameters = func_get_args() + array($this->aArguments, $this->sIndex, $this->hfCallback,);
        $this->aArguments = $_aParameters[0];
        $this->sIndex = ( string )$_aParameters[1];
        $this->hfCallback = $_aParameters[2];
    }
    public function get() {
        $_sIndex = $this->getAOrB('0' !== $this->sIndex && empty($this->sIndex), '', "[" . $this->sIndex . "]");
        return $this->_getFiltered($this->_getFieldName() . $_sIndex);
    }
    protected function _getFiltered($sSubject) {
        return is_callable($this->hfCallback) ? call_user_func_array($this->hfCallback, array($sSubject, $this->aArguments, $this->sIndex)) : $sSubject;
    }
}
class CustomScrollbar_AdminPageFramework_Form_View___Generate_FlatFieldInputName extends CustomScrollbar_AdminPageFramework_Form_View___Generate_FieldInputName {
    public function get() {
        $_sIndex = $this->getAOrB('0' !== $this->sIndex && empty($this->sIndex), '', "|{$this->sIndex}");
        return $this->_getFiltered($this->_getFlatFieldName() . $_sIndex);
    }
}
