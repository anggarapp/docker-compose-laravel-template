<?php

namespace App\Repositories;

interface UserRepository
{
    public function getAllUsers();
    public function getUserById($userId);
    public function getUserByUsername($userUsername);
    public function deleteUser($userId);
    public function updateUser($userId, array $newDetails);
    public function createUser(array $newDetails);
    public function findUserWithSort($sortColumn, $sortDirection, $searchTerm = null);
}
