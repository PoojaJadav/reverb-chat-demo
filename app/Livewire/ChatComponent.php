<?php

namespace App\Livewire;

use App\Events\SendMessageNotification;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{
    public string $message = '';

    public $chats = [];

    public function triggerEvent()
    {
        event(new SendMessageNotification($this->message));
    }

    #[On('echo-private:send-notification,SendMessageNotification')]
    public function showAlert($message)
    {
        $this->chats[] = $message['message'];

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}
