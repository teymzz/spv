<?php

namespace spv\mi\core;
use spv\mi\core\classes\FileManager;

class Spv {

    static function install(){

        $FileManager = new FileManager;

        $FileManager->setUrl('./vendor/spv/mi/');

        if($FileManager->moveContentsTo(dirname(__DIR__), ['vendor'])){

            //$FileManager->deleteFile('vendor/');
            //shell_exec('composer dump-autoload -o');
            //delete the vendor file

        }

    }

}