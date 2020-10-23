<?php

namespace App\Commands;

class Price extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendPhoto($this->bot_user->getId(), 'https://socialbest.kurusa.uno/app/src/1.png');
    }

}