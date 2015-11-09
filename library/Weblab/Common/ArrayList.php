<?php

namespace Weblab\Common;

/**
 * Description of ArrayList
 *
 * @author Tim
 */
class ArrayList extends AbstractList {
    
    
    private $data = array();
    
    public function add($item) {
        array_push($this->data, $item);
    }
    
    public function insert($index, $item) {
        array_splice($this->data, $index, 0, $item);
    }
    
    public function remove($item) {
        
        $index = $this->indexOf($item);
        
        if ($index > 0) {
            $this->removeAt($index);
        }
        
        return false;
    }
    
    public function removeAt($index) {
        array_splice($this->data, $index, 1);
    }
    
    public function indexOf($item) {
        $index = array_search($item, $this->data);
        
        return $index ? $index : -1;
    }
    
    public function get($index) {
        return $this->data[$index];
    }
}
