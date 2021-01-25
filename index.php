<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';
use App\Core\{router, request};
router::load('routes.php')
->direct(request::uri(), request::method());