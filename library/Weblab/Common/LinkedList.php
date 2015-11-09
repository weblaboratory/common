<?php

namespace Weblab\Common;

/**
 * Description of LinkedList
 *
 * @author Tim
 */
class LinkedList extends AbstractList {
    
    private $head = null;
    private $tail = null;
    
    public function get($index) {
        
        $current = $this->head;
        
        while ($current != null && $index --> 0) {
            $current = $current->next;
        }
        
        return $index == 0 ? $current : null;
    }
    
    public function add($item) {
        
        $node = new LinkedNode($item);
        
        if ($this->tail == null) {
            $this->head = $node;
            $this->tail = $this->head;
        } else {
            $this->tail->next = $node;
        }
    }
    
    public function insert($index, $item) {
        
    }
    
    public function remove($item) {
        
    }
    
    public function removeAt($index) {
        
    }
    
    public function indexOf($item) {
        
    }
}
