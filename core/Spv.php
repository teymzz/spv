<?php

namespace spv\mi\core;
use spv\mi\core\classes\FileManager;

class Spv {

    static function init(){

        $dir = './vendor/spv';
        var_dump('is_dir:'.$dir);
        print PHP_EOL;
        var_dump('dir:'.$dir);
        print PHP_EOL.PHP_EOL;
        if(is_dir($dir)){
            
            $FileManager = new FileManager;
    
            $FileManager->setUrl($dir.'/mi');
    
            if($FileManager->moveContentsTo('./', ['vendor', 'mi'])){
    
                $FileManager->deleteFile($dir);
    
            }

        }elseif(is_dir('./core/spoova')){
            
            include_once "core\spoova.php";

        }


    }

}