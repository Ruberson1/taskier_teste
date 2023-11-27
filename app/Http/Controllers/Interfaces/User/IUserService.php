<?php

namespace App\Http\Controllers\Interfaces\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

interface IUserService
{
    public function update(Request $request ,string|int $id): RedirectResponse;
}
