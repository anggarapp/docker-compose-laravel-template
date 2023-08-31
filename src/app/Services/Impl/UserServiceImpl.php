<?php

namespace App\Services\Impl;

use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Support\Facades\Http;

class UserServiceImpl implements UserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUsers()
    {
    }

    public function getUserById($id)
    {
    }

    public function getUserByUsername($slug)
    {
    }

    public function createUser(array $newDetails)
    {
    }

    public function updateUser($userId, array $newDetails)
    {
    }

    public function deleteUser($userId)
    {
    }

    public function findUserWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
