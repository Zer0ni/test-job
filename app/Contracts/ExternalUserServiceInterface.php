<?php


namespace App\Contracts;


interface ExternalUserServiceInterface
{
    public function createUser($userName, $password);
    public function updateUser();
    public function deleteUser();
}
