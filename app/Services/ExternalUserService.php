<?php


namespace App\Services;
use \App\Contracts\ExternalUserServiceInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ExternalUserService implements ExternalUserServiceInterface
{
    public function createUser($userName, $password)
    {

        $response = Http::withBody(json_encode(['email'=>'','password'=>'']),'json')->post('https://reqres.in/api/register');
        Log::info('[Services/ExternalUserService] external user creation message: ' . $response->body());
    }

    public function updateUser()
    {

    }

    public function deleteUser()
    {

    }
}
