<?php

use Illuminate\Support\Facades\Route;
use PhpMqtt\Client\Facades\MQTT;

Route::get('/publish', function () {
    MQTT::publish('windows/topic', 'Hello from Laravel on Windows!');
    return "✅ Message Published to MQTT!";
});

Route::get('/', function () {
    return view('welcome');
});
