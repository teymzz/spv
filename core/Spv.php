<?php

namespace spv\mi\core;
use spv\mi\core\classes\FileManager;

class Spv {

    static function init(){

        $dir = './vendor/spv';

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