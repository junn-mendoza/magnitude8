<?php
namespace App\Components;
/**
 * The loader interface for loading mode, components and config
 * 
 * @author emerald junn <emeraldjunn@gmail.com>
 */
interface LoaderInterface
{
    public function load($name);
    public function unload($name);
    public function isLoaded($name);
}

