<?php
$app = [];
$app['config'] = require 'config.php';
$app['database'] = new QueryBuilder(
    connection::make($app['config']['database'])
);