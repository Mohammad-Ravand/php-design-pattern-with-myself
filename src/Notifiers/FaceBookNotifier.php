<?php
namespace App\Notifiers;
use App\Notifiers\NotificationDecorator;

class   FaceBookNotifier extends NotificationDecorator{
    public function setMessage(string $message):void{
        $this->message = 'sending notifier by facebook';
    }
}