<?php

namespace App\Http\Controllers\Interfaces\Auth;

use App\Models\User;


interface IRegisterService
{
    public function create(array $data): User;
}
