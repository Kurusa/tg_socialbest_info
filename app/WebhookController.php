<?php

namespace App;

use App\Commands\Start;
use TelegramBot\Api\Client;
use TelegramBot\Api\Types\Update;

class WebhookController
{

    public function handle()
    {
        $client = new Client(getenv('TELEGRAM_BOT_TOKEN'));

        $client->on(function (Update $update) {
            $handler_class_name = Start::class;
            if ($update->getCallbackQuery()) {
                $config = include(__DIR__ . '/config/callback_commands.php');
                $action = \json_decode($update->getCallbackQuery()->getData(), true)['a'];

                if (isset($config[$action])) {
                    $handler_class_name = $config[$action];
                }
            } else {
                // checking commands -> keyboard commands -> mode -> exit
                if ($update->getMessage()) {
                    $text = $update->getMessage()->getText();

                    if (strpos($text, '/') === 0) {
                        $handlers = include(__DIR__ . '/config/slash_commands.php');
                    }

                    if (isset($handlers[$text])) {
                        $handler_class_name = $handlers[$text];
                    } else {
                        $handlers = include(__DIR__ . '/config/keyboard_сommands.php');
                        if ($handlers[$text]) {
                            $handler_class_name = $handlers[$text];
                        }
                    }
                }
            }

            (new $handler_class_name($update))->handle();
        }, function (Update $update) {
            return true;
        });

        $client->run();

    }

}
