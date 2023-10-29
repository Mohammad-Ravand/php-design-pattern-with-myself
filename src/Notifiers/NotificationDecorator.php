<?php
namespace App\Notifiers;
use App\Contracts\Notifier;

class   NotificationDecorator implements Notifier {
    protected Notifier|null $wrapper;
    public string $message;

    public function __construct(Notifier|null $wrapper=null){
        $this->wrapper = $wrapper;
        $this->message = '';
    }

    public function setMessage(string $message):void{
        $this->message = $message;
    }
    public function send(){
        if($this->wrapper){
            $this->wrapper->send();
        }
        echo $this->message;
    }
}