<?php

declare(strict_types=1);

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\Repositories\MemoryRepository;

return [

    'default_connection' => 'default',

    'connections' => [
    'subscriber' => [
        'host' => env('MQTT_HOST', '127.0.0.1'),
        'port' => env('MQTT_PORT', 1883),
        'client_id' => env('MQTT_CLIENT_ID_SUB', 'laravel_sub'),
        'protocol' => MqttClient::MQTT_3_1_1,
        'clean_session' => false,
        'connection_settings' => [
            'keep_alive_interval' => env('MQTT_KEEP_ALIVE_INTERVAL', 20),
            'socket_timeout' => env('MQTT_SOCKET_TIMEOUT', 10),
            'use_tls' => false,
        ],
    ],
    'publisher' => [
        'host' => env('MQTT_HOST', '127.0.0.1'),
        'port' => env('MQTT_PORT', 1883),
        'client_id' => env('MQTT_CLIENT_ID_PUB', 'laravel_pub'),
        'protocol' => MqttClient::MQTT_3_1_1,
        'clean_session' => true,
        'connection_settings' => [
            'keep_alive_interval' => env('MQTT_KEEP_ALIVE_INTERVAL', 20),
            'socket_timeout' => env('MQTT_SOCKET_TIMEOUT', 10),
            'use_tls' => false,
        ],
    ],
],

];
