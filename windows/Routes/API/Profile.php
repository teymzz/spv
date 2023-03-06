<?php

namespace spv\mi\windows\Routes\API;

use spv\mi\core\classes\Ajax;

class Profile {


    function __construct()
    {
        Ajax::withJson('invalid transfer protocol', 404);
    }
    
}