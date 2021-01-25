<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';
use App\Core\{router, request};
router::load('app/routes.php')
->direct(request::uri(), request::method());