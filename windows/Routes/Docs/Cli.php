<?php

namespace spv\mi\windows\Routes\Docs;

use spv\mi\windows\Frames\UserFrame;

class Cli extends UserFrame{

    function __construct($vars)
    {
        self::call($this,
            [   
                window(':cli') => 'index',
                SELF::ARG => $vars
            ],    
        );
    }

    function index($vars) {
       
        self::load('docs.cli.index', fn() => compile() );

    }

}