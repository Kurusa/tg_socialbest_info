<?php

namespace App\Commands;

use TelegramBot\Api\Types\InputMedia\InputMediaPhoto;

class Package extends BaseCommand
{

    function processCommand()
    {
        $media = new \TelegramBot\Api\Types\InputMedia\ArrayOfInputMedia();
        $media->addItem(new InputMediaPhoto('https://socialbest.kurusa.uno/app/src/2.png'));
        $media->addItem(new InputMediaPhoto('https://socialbest.kurusa.uno/app/src/3.png'));

        $this->getBot()->sendMediaGroup($this->bot_user->getId(), $media);
    }

}