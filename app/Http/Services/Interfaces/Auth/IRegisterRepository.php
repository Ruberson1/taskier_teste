<?php

namespace App\Http\Services\Interfaces\Auth;

use App\Models\User;

interface IRegisterRepository
{
    public function create(array $data): User;
}
