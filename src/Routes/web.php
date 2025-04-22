<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::get('/test-pack', static function () {
    phpinfo();
});

Route::get('/config', static function () {
    echo Config::get('test-pack');
});