<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Interfaces\User\IUserService;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct(private readonly IUserService $userService)
    {
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
    }

    public function users(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.users', ['users' => User::all()]);
    }

    public function user(string|int $id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application |RedirectResponse
    {
        $user = User::find($id);
        if(!$user) {
            return redirect()->back();
        }
        return view('admin.user', compact('user'));
    }

    public function update(Request $request ,string|int $id): RedirectResponse
    {
        return $this->userService->update(request: $request, id: $id);
    }
}
