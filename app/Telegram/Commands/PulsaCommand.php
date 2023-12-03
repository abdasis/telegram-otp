<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
class PulsaCommand extends Command
{
    protected string $name = 'Pulsa';
    protected string $description = 'Command Untuk membalas ketika user start chat';

    public function handle()
    {

        $this->replyWithMessage([
            'text' => 'Pilih Nomial Pulsa yang ingin di Beli',
        ]);
    }
}
