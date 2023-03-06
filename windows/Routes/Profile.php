<?php

namespace spv\mi\windows\Routes;

use Window;

class Profile extends Window {

    public function __construct(){

        self::call($this,
            [
                window(':') => 'index'
            ]
        );

    }

    function index() {
        self::load('index', fn() => compile() );
    }

}