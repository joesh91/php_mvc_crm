<?php

class validator{
	
	public static function requiredValName($value){
		return !empty(trim($value));
	}
	
	public static function emailVal($value){
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}
	
	public static function minVal($value,$min){
		return $value >= $min;
	}
	
	public static function nicVal($value){
		return preg_match('/^[0-9]{9}[vVxX]$|^[0-9]{12}$/',$value);
	}
}

?>