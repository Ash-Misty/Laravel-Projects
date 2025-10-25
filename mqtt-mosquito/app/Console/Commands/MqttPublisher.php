<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpMqtt\Client\Facades\MQTT;

class MqttPublisher extends Command
{
    protected $signature = 'mqtt:publish {message}';
    protected $description = 'MQTT Publisher';

    public function handle()
    {
        $message = $this->argument('message');

        
        $mqtt = MQTT::connection('publisher');


        $mqtt->publish('windows/topic', $message, 1);
        $this->info(" Message published: $message");

        $mqtt->disconnect();
    }
}

