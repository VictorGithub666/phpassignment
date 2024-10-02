<?php

trait Action {
    public function ActionLog($actionmessage) {
        echo "Action: $actionmessage ";
    }

}

class Commander {
    use Action;

    public function MissileLog() {
        $this->ActionLog("Missile Launched");
    }
}

class Soldier {
    use Action;

    public function ShootLog() {
        $this->ActionLog("Shooting Action Initiated");
    }
}



$army = new Commander();
$army->MissileLog();