<?php

namespace Weblab\Common;

/**
 * Description of String
 *
 * @author Tim
 */
class String {
    
    private $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function concatenate($value) {
        return new String($this->data . String::data($value));
    }
    
    public function indexOf($substring) {
        $pos = strpos($this->data, String::data($substring));
        return $pos !== false ? $pos : -1;
    }
    
    public function substring($index, $length = null) {
        return new String(substr($this->data, $index, $length));
    }
    
    public static function fix($value) {
        if ($value instanceof String) {
            return $value;
        } else if (is_string($value)) {
            return new String($value);
        } else {
            throw new \RuntimeException("Can't coerce value into String");
        }
    }
    
    private static function data($value) {
        if ($value instanceof String) {
            return $value->data;
        } else if (is_string($value)) {
            return $value;
        } else {
            throw new \RuntimeException("Can't coerce value into plain string");
        }
    }
}
