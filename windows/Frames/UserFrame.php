<?php

namespace spv\mi\windows\Frames;

use spv\mi\windows\Models\Access\AccessModel;
use User;

class UserFrame extends AccessFrame {

    static function super() : void {

      parent::super();

      if(window('base') !== 'signup' && window('base') !== 'login'){     

         User::onauto('logout', 'login');
         
      }

      AccessModel::onSubmit('logout');

    }

} 