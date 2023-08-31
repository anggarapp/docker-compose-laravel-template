<?php

namespace App\Services;

interface UserService
{
    public function getUsers();
    public function getUserById($id);
    public function getUserByUsername($slug);
    public function deleteUser($userId);
    public function updateUser($userId, array $newDetails);
    public function createUser(array $newDetails);
    public function findUserWithSort($sortColumn, $sortDirection, $searchTerm = null);
}
