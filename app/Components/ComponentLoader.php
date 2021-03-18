<?php
namespace App\Components;

use App\Components\Loader;
/**
 * Descript of ConfigLoader
 */
class ComponentLoader extends Loader implements LoaderInterface
{
    public function load ($name, $args = []) 
    {
        //to avoid returning the same component for different arguments
        $md5_name = $name . md5(json_encode($args));
        if(!$this->isLoaded($md5_name)) {
            $args_array = func_get_args();
            switch(count($args_array)) {
                case 1:
                    $this->loaded[$md5_name] = new $name();
                    break;
                case 2:
                    $this->loaded[$md5_name] = new $name($args[1]);
                    break;
                case 3:
                    $this->loaded[$md5_name] = new $name($args[1], $args[2]);
                    break;
                case 4:
                     $this->loaded[$md5_name] = new $name($args[1], $args[2], $args[3]);
                    break;
                    
               
            }
        }
        return $this->loaded[$md5_name];

    }

    public function setComponent($name, $obj)
    {
        $this->loaded[$name] = $obj;
    }

   
}

