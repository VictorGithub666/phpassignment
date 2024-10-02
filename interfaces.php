<?php

interface SocialmediaNotificaion {
    public function received($message);
}

class FBNotification implements SocialmediaNotificaion {
    public function received($message) {
        echo "Facebook Message Received";
    }
}

class XNotification implements SocialmediaNotificaion {
    public function received($message) {
        echo "X Message Received";
    }
}

class INSTANotification implements SocialmediaNotificaion {
    public function received($message) {
        echo "Instagram Message Received";
    }
}

class WHATNotification implements SocialmediaNotificaion {
    public function received($message) {
        echo "Whatsapp Message Received";
    }
}

class TWITCHNotification implements SocialmediaNotificaion {
    public function received($message) {
        echo "Twitch Message Received";
    }
}

class TELENotification implements SocialmediaNotificaion {
    public function received($message) {
        echo "Telegram Message Received";
    }
}

$message = new TWITCHNotification();
echo $message->received($message); //Now we display The message for twitch