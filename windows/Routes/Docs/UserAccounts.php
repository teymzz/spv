<?php

namespace spv\mi\windows\Routes\Docs;

use spv\mi\windows\Frames\UserFrame;

class UserAccounts extends UserFrame {

    function __construct($vars){

      self::call($this, [
        window(':useraccounts') => 'index',
        SELF::ARG => $vars
      ]);
        
    }

    function index($vars){
        
        self::load('docs.useraccounts.index', fn() => compile($vars));
        
    }


}