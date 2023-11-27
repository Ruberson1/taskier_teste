<?php

namespace App\Http\Services\User;

use App\Http\Controllers\Interfaces\User\IUserService;
use App\Http\Services\Interfaces\User\IUserRepository;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class UserServiceImp implements IUserService
{
    public function __construct(private readonly IUserRepository $userRepository)
    {
    }

    public function update(Request $request, int|string $id): RedirectResponse
    {
        return $this->userRepository->update($request, $id);
    }
}
