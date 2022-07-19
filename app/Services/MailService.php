<?php

namespace App\Services;
use App\Mail\InformUserProfile;
use Illuminate\Support\Facades\Mail;


class MailService
{
    public function sendUserProfile($user)
    {
        Mail::to($user->all()[array_key_first($user->all())]['email'])->send(new InformUserProfile($user));
    }
}
?>
