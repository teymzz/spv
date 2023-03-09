<?php

namespace spv\mi\core\commands;

use spv\mi\core\classes\FileManager;

class Spv {

    static function install()
    {

        $FileManager = new FileManager;

        $FileManager->setUrl('vendor/spv/mi/');

        if($FileManager->moveContentsTo(__DIR__, ['vendor'])){

            //delete the vendor file

            //$FileManager->deleteFile('vendor/');

        }
    }


}