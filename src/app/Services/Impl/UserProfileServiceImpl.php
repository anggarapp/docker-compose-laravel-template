<?php

namespace App\Services\Impl;

use App\Repositories\UserProfileRepository;
use App\Services\UserProfileService;
use Illuminate\Support\Facades\Http;

class UserProfileServiceImpl implements UserProfileService
{
    private UserProfileRepository $userProfileRepository;

    public function __construct(UserProfileRepository $userProfileRepository)
    {
        $this->userProfileRepository = $userProfileRepository;
    }

    public function getUserProfiles()
    {
    }

    public function getUserProfileById($id)
    {
    }

    public function getUserProfileBySlug($slug)
    {
    }

    public function deleteUserProfile($userProfileId)
    {
    }
    public function updateUserProfile($userProfileId, array $newDetails)
    {
    }
    public function createUserProfile(array $newDetails)
    {
    }
    public function findUserProfileWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
