<?php

namespace App\Commands;

use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

class Discount extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendMessageWithKeyboard($this->bot_user->getId(), 'Что бы получить промокод на скидку - 10% на наши услуги ,нажмите кнопку «Получить скидку » и введите Ваше Имя, и номер телефона.
В ответ вам придёт промокод!',  new InlineKeyboardMarkup([
            [
                [
                    'text' => 'Получить скидку',
                    'url' => 'https://t.me/social_best_off'
                ]
            ]
        ]));
    }

}