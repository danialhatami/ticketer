<?php

use App\Models\Ticket;

class TicketService
{


    public function create(): Ticket
    {
        $ticketService = Ticket::create();

        return $ticketService;
    }
}
