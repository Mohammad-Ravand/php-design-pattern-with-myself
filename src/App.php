<?php
namespace App;

use App\Contracts\Notifier;
use App\Notifiers\SmsNotifier;
use App\Notifiers\FaceBookNotifier;

class App{
    private Notifier $notifier;
    public function __construct(){
    }

    

    public function notify(){
        // send notify by sms
        $smsNotifier = new SmsNotifier();
        $smsNotifier->setMessage("send sms message");
        
        // send notify by facebook
        $facebookNotifier = new FaceBookNotifier($smsNotifier);
        $facebookNotifier->setMessage("send facebook message");

        $facebookNotifier->send();

    }
}