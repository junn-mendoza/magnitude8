<?php
namespace App\Components;
/**
 * Description of Loader
 * 
 * @author emerald junn <emeraldjunn@gmail.com>
 */
class Loader
{
    protected $loaded = array();

    /**
     * Check component if loaded
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @param type $name
     * @return boolean
     */
    public function isLoaded($name) {
        if(isset($this->loaded[$name])) {
            return true;
        }
        return false;
    }

    /**
     * Unload, loaded component
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @param type $name
     */
    public function unload($name)
    {
        unset($this->loaded[$name]);
    }

}

