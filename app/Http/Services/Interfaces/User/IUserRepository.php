<?php

namespace App\Http\Services\Interfaces\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

interface IUserRepository
{
    public function update(Request $request, int|string $id): RedirectResponse;
}
