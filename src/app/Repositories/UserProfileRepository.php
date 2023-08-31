<?php

namespace App\Repositories;

interface UserProfileRepository
{
    public function getAllUserProfiles();
    public function getUserProfileById($userProfileId);
    public function deleteUserProfile($userProfileId);
    public function updateUserProfile($userProfileId, array $newDetails);
    public function createUserProfile(array $newDetails);
}
