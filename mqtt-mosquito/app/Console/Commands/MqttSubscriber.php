<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpMqtt\Client\Facades\MQTT;
use Illuminate\Support\Facades\Log;

class MqttSubscriber extends Command
{
    protected $signature = 'mqtt:subscribe';
    protected $description = 'MQTT Subscriber Worker';

    public function handle()
    {
        $this->info(" MQTT Subscriber Started... Listening...");

        $mqtt = MQTT::connection('subscriber');

        $mqtt->subscribe('windows/topic', function ($topic, $message) {
            Log::info(" MQTT Received: {$message}");
            echo " Message: $message\n";
        }, 1);


       while (true) {
    $mqtt->loopOnce(microtime(true), true, 100000);
}


    }
}
