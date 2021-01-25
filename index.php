<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
router::load('routes.php')
->direct(request::uri(), request::method());