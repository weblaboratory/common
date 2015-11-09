<?php

namespace Weblab\Common;

/**
 * Description of AbstractList
 *
 * @author Tim
 */
abstract class AbstractList {
    
    public abstract function get($index);
    
    public abstract function add($item);
    
    public abstract function insert($index, $item);
    
    public abstract function remove($item);
    public abstract function removeAt($index);
    
    public abstract function indexOf($item);
}