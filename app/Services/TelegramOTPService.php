<?php

namespace App\Services;

use Ichtrojan\Otp\Otp;
use Illuminate\Support\Facades\Log;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramOTPService
{

    public function send($telegram_id, $identifier, $lenght = 4, $validity)
    {
        $otp = new Otp();
        $token = $otp->generate($identifier, $lenght, $validity)->token;
        Log::info("OTP Anda: " . $token);
        return TelegramMessage::create()
            ->to('@idabdasis')
            ->content("Hello there!")
            ->line("Your invoice has been *PAID* " . $token)
            ->line("Thank you!");
    }
}
