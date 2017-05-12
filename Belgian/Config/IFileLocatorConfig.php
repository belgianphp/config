<?php 

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp
 * @copyright   2017 
 * 
 */
 



namespace Belgian\Config; 


interface IFileLocatorConfig
{
    public function getFile($name);

    public function includeFile($name);
}


