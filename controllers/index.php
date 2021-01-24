<?php
$users = $app['database']->selectAll('users');

include 'views/index.view.php';