<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = 'Command Untuk membalas ketika user start chat';

    public function handle()
    {

        /* $keyboard = [
             'inline_keyboard' => [
                 [
                     ['text' => 'Pulsa Regular', 'callback_data' => '/pulsa'],
                     ['text' => 'Paket Data', 'callback_data' => '/paket_data']
                 ]
             ]
         ];*/

        /*$keyboard = [
            ['7', '8', '9'],
            ['4', '5', '6'],
            ['1', '2', '3'],
            ['0']
        ];

        $reply_markup = Telegram::replyKeyboardMarkup([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        ]);*/

        $keyboard = Keyboard::make()->isInlineKeyboard()->row([
                Keyboard::button(['text' => 'Pulsa']),
                Keyboard::button(['text' => 'Paket Data']),
                Keyboard::button(['text' => 'Topup Game'])
            ]
        )->setResizeKeyboard(true);

        $this->replyWithMessage([
            'text' => 'Halo Selamat Datang, Kamu dapat melakukan transaksi dengan mudah disini',
            'reply_markup' => $keyboard
        ]);
    }
}

