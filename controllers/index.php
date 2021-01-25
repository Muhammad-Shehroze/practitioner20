<?php
$users = App::get('database')->selectAll('users');

include 'views/index.view.php';