<?php

namespace App\Commands;

class Free extends BaseCommand
{

    function processCommand()
    {
        $this->getBot()->sendPhoto($this->bot_user->getId(), 'https://socialbest.kurusa.uno/app/src/4.png');
    }

}