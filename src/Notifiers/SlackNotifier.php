<?php
namespace App\Notifiers;
use App\Notifiers\NotificationDecorator;

 class  SlackNotifier extends NotificationDecorator{
    public function setMessage(string $message):void{
        $this->message =  "sending notifier by slack";
    }
 }