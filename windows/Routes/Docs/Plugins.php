<?php

namespace spv\mi\windows\Routes\Docs;

use spv\mi\windows\Frames\UserFrame;

class Plugins extends UserFrame {

    function __construct($vars){

      self::call($this,
        [
          window(':plugins') => 'root',
          SELF::ARG => $vars
        ]
      );
        
    }

    function root($vars){
      $pointer = self::mapurl('Tutorial/Plugins', ' <span class="bi-chevron-right"></span> ');
        
      $vars = [
          'title' => 'Tutorial - Plugins',
          'pointer' => $vars['pointer']
      ];

      self::load('docs/plugins/index', fn() => compile($vars));
      
    }
  

}