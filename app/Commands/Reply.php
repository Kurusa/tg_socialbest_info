<?php

namespace App\Commands;

use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

class Reply extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendMessageWithKeyboard($this->bot_user->getId(), 'Отзывы наших клиентов , подтверждают , что мы выполняем свои услуги качественно и профессионально!',  new InlineKeyboardMarkup([
            [
                [
                    'text' => 'Отзывы в Telegram',
                    'url' => 'https://t.me/social_best_otzuv'
                ],
                [
                    'text' => 'Отзывы Facebook',
                    'url' => 'https://www.facebook.com/pg/social.best.off/reviews/'
                ],
            ]
        ]));
    }

}