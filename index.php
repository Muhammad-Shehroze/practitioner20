<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
require router::load('routes.php')
->direct(request::uri(), request::method());