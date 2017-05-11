<?php
namespace App;
class TicketsCreate {

    public function create($eventIds) {
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
    private function reserveRandomLocalTicket () {
        $q = $this->rand(99,3000);
        echo ' Local Ticket Id:' .+ $q;
    }

    private function reserveRandomPartnerTicket () {
       $q = $this->rand(80000,90000);
        echo ' Partner Ticket Id:' .+ $q;

    }

    private function rand ($from, $to) {
        $a = rand($from, $to);
        return $a;
    }

}