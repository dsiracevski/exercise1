<?php

require "vendor/autoload.php";
$query = require 'core/bootstrap.php';



require Router::load('routes.php')
    ->redirect(Request::uri(), Request::method());