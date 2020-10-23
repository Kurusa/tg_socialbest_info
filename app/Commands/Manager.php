<?php

namespace App\Commands;

use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

class Manager extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendMessageWithKeyboard($this->bot_user->getId(), 'Хотите консультацию по продвижению?
Свяжитесь с нашим менеджером, он даст ответы на возникшие вопросы)', new InlineKeyboardMarkup([
            [
                [
                    'text' => 'Связаться',
                    'url' => 'https://t.me/social_best_off'
                ]
            ]
        ]));
    }

}