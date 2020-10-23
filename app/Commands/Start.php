<?php

namespace App\Commands;

use TelegramBot\Api\Types\ReplyKeyboardMarkup;

class Start extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendMessageWithKeyboard($this->bot_user->getId(), 'Выберите из меню нужную категорию ⬇️', new ReplyKeyboardMarkup([
            [
                '🛒Прайс', '💼Пакетные предложения'
            ],
            [
                '⭐Тест-драйв', '👨🏻‍💻Связь с менеджером'
            ], ['🗣Отзывы', '📲Соцсети'],
            ['Получить скидку - 10%']
        ], false, true));
    }

}