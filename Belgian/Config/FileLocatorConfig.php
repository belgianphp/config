<?php 

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp
 * @copyright   2017 
 * 
 */




namespace Belgian\Config;


class FileLocatorConfig implements IFileLocatorConfig
{

    private $path;




    public function __construct($path)
    {
        self::setPath($path);
    }





    public function getFile($filename)
    {
        $config = self::fileConfig($filename);
        return include $config;
    } 




    public function includeFile($filename)
    {
        $config = self::fileConfig($filename);
        include $config;
    } 




    private function fileConfig($filename)
    {
        return $this->path 
            . $filename . '.php';
    } 




    private function setPath($path)
    {
        $this->path = rtrim($path, '\\/') 
            . DIRECTORY_SEPARATOR;

        return $this;
    } 





}

