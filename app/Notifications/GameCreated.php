<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class GameCreated extends Notification
{
    use Queueable;

    private $game_id;
    private $game_title;
    private $user;
    public function __construct($game_id,$game_title,$user)
    {
        $this->user=$user;
        $this->game_id=$game_id;
        $this->game_title=$game_title;
    }


    public function via($notifiable)
    {
        return ['database'];
    }



    public function toArray($notifiable)
    {
        return [
            "game_id" => $this->game_id,
            "gametitle" => $this->game_title,
            "user" => Auth()->user()->name,
        ];
    }
}
