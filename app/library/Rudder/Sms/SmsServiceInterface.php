<?php 

namespace Rudder\Sms;

interface SmsServiceInterface {
    /**
     * @param \Rudder\Sms\SmsMessage $to
     * @param \Rudder\Sms\SmsMessage $message
     * @return
     */
    public function send($to, $message);
}