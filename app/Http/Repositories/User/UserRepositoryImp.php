<?php

namespace App\Http\Repositories\User;

use App\Http\Services\Interfaces\User\IUserRepository;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class UserRepositoryImp implements IUserRepository
{
    public function update(Request $request, int|string $id): RedirectResponse
    {
        $user = User::find($id);
        if(!$user) return redirect()->back();
        $user->update($request->only([
            'name', 'email'
        ]));

        $permission = Permission::find($request->permission);
        $user->permissions()->sync($permission);
        $this->sendWebNotification($user);

        return redirect()->route('users');
    }

    #[NoReturn] protected function sendWebNotification($user): void
    {
        if(!$user->device_key) return;
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = [$user->device_key];

        $serverKey = env('FCM_SERVER_KEY');
//        dd($FcmToken);
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => 'Atenção',
                "body" => 'Houve uma atualização no seu usuário',
            ]
        ];
        $encodedData = json_encode($data);

        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post

        $result = curl_exec($ch);
        if ($result === FALSE) {
            dd('Curl failed: ' . curl_error($ch));
        }
        // Close connection
        curl_close($ch);
        // FCM response
//        dd($result);
    }
}
