<?php

namespace spv\mi\core;
use spv\mi\core\classes\FileManager;
use spv\mi\core\commands\Cli;

class Spv {

    static function init(){

        $dir = './vendor/spv';
        if(is_dir($dir)){
            $FileManager = new FileManager;
    
            $FileManager->setUrl($dir.'/mi');
    
            if($FileManager->moveContentsTo('./', ['vendor', 'mi'])){
    
                $FileManager->deleteFile($dir);

                Cli::shell('composer dump-autoload -o');
    
            }

        }elseif(is_file('core/spoova.php')){

            include_once "core/spoova.php";

        }


    }

}