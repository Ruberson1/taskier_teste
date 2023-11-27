<?php

namespace App\Http\Services\Auth;

use App\Http\Controllers\Interfaces\Auth\IRegisterService;
use App\Http\Services\Interfaces\Auth\IRegisterRepository;
use App\Models\User;


readonly class RegisterServiceImp implements IRegisterService
{
    public function __construct(private IRegisterRepository $registerRepository)
    {
    }

    public function create(array $data): User
    {
        return $this->registerRepository->create($data);
    }
}
