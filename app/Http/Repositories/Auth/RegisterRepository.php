<?php

namespace App\Http\Repositories\Auth;

use App\Http\Services\Interfaces\Auth\IRegisterRepository;
use App\Mail\Sendmail;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterRepository implements IRegisterRepository
{

    public function create(array $data): User
    {

            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);

            $user->save();

            $permission = Permission::find(2);
            $user->permissions()->save($permission);
            Mail::to($user->email)->send(new Sendmail($user->name));
            return $user;

    }
}
