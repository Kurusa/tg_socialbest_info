<?php

namespace App\Commands;

use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

class Socials extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendMessageWithKeyboard($this->bot_user->getId(), 'Присоединяйтесь к нашим соц.сетям🤗', new InlineKeyboardMarkup([
            [
                [
                    'text' => 'Instagram',
                    'url' => 'https://instagram.com/social_best_?igshid=gkqfrgnyyydl'
                ],
                [
                    'text' => 'Facebook',
                    'url' => 'https://m.facebook.com/social.best.off'
                ],
            ]
        ]));
    }

}