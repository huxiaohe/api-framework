<?php

namespace Rudder\Sms;

class SmsMessage {

    private $content;

    private $subject;

    private $mobiles;

    /**
     * @param $content
     * @param $subject
     * @param $mobiles array
     */
    public function __construct($content, $subject, $mobiles) {
        $this->content = $content;
        $this->subject = $subject;
        $this->mobiles = $mobiles;
    }
    
    
}