<?php
namespace App;
class TicketsCreate {

    public function create($eventIds) {
//        $eventIds = [14, 21, 587, 82];
        //get partner $id
        $partnerId = rand(100, 1000);

        foreach ($eventIds as $eventId) {
            echo 'Ticket Num: ' .+ $eventId .+ ' ';

            if ($eventId % 2) {
                $this->reserveRandomLocalTicket($eventId);
            } else {
                $this->reserveRandomPartnerTicket($eventId, $partnerId);
            }

            echo "<h5>--------------------------------------------------</h5>\n";
        }

    }
    private function reserveRandomLocalTicket ($eventId) {
        $q = abs(rand($eventId , 1000 + rand(100, 1000)-rand(100, 1000)));
        echo ' Local Ticket Id:' .+ $q;
    }

    private function reserveRandomPartnerTicket ($eventId, $partnerId) {
       $q = abs(rand($eventId , $partnerId )+ rand(100, 1000)-rand(100, 1000));
        echo ' Partner Ticket Id:' .+ $q;
    }

}