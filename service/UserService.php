<?php

class UserService
{

    public function lowestAssign(string $sort = 'asc'): \Illuminate\Support\Collection
    {
        return \App\Models\User::all();
    }
}
