<?php

namespace App\Services;

interface UserProfileService
{
    public function getUserProfiles();
    public function getUserProfileById($id);
    public function getUserProfileBySlug($slug);
    public function deleteUserProfile($userProfileId);
    public function updateUserProfile($userProfileId, array $newDetails);
    public function createUserProfile(array $newDetails);
}
