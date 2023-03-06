<?php

namespace spv\mi\windows\Routes\Docs;

use spv\mi\windows\Frames\UserFrame;

class Sessions extends UserFrame {

    function __construct($vars){

      self::call($this, [
        lastCall() => 'root',
        lastCall('/session') => 'docs',
        SELF::ARG => $vars
      ]);
        
    }

    function root($vars){
        
        self::load('docs.sessions.index', fn() => compile($vars));
        
    }

    function docs($vars) {
        self::load('docs.sessions.session', fn() => compile($vars));
    }


}