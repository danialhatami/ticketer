<?php

use App\Models\Ticket;

class TicketService
{

    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function create(array $parameters, \App\Models\User $questionerUser): Ticket
    {
        return Ticket::create([
            'title' => $parameters['title'],
            'description' => $parameters['description'],
            'assignee_user_id' =>
            'assignee_user_id'
        ]);

    }
}
