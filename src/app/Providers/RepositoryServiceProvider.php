<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\ImageRepository;
use App\Repositories\Impl\CategoryRepositoryImpl;
use App\Repositories\Impl\ImageRepositoryImpl;
use App\Repositories\Impl\PostRepositoryImpl;
use App\Repositories\Impl\TagRepositoryImpl;
use App\Repositories\Impl\UnitRepositoryImpl;
use App\Repositories\Impl\UserProfileRepositoryImpl;
use App\Repositories\Impl\UserRepositoryImpl;
use App\Repositories\PostRepository;
use App\Repositories\TagRepository;
use App\Repositories\UnitRepository;
use App\Repositories\UserProfileRepository;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use App\Services\CategoryService;
use App\Services\ImageService;
use App\Services\Impl\AuthServiceImpl;
use App\Services\Impl\CategoryServiceImpl;
use App\Services\Impl\LandingServiceImpl;
use App\Services\Impl\MobileUnitScheduleServiceImpl;
use App\Services\Impl\PostServiceImpl;
use App\Services\Impl\StockServiceImpl;
use App\Services\LandingService;
use App\Services\MobileUnitScheduleService;
use App\Services\PostService;
use App\Services\StockService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public array $singletons = [
        LandingService::class => LandingServiceImpl::class,
        StockService::class => StockServiceImpl::class,
        MobileUnitScheduleService::class => MobileUnitScheduleServiceImpl::class,
        CategoryService::class => CategoryServiceImpl::class,
        ImageService::class => ImageServiceImpl::class,
        PostService::class => PostServiceImpl::class,
        TagService::class => TagServiceImpl::class,
        UnitService::class => UnitServiceImpl::class,
        UserProfileService::class => UserProfileServiceImpl::class,
        UserService::class => UserServiceImpl::class,
        CategoryRepository::class => CategoryRepositoryImpl::class,
        ImageRepository::class => ImageRepositoryImpl::class,
        PostRepository::class => PostRepositoryImpl::class,
        TagRepository::class => TagRepositoryImpl::class,
        UnitRepository::class => UnitRepositoryImpl::class,
        UserProfileRepository::class => UserProfileRepositoryImpl::class,
        UserRepository::class => UserRepositoryImpl::class,
        AuthService::class => AuthServiceImpl::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function provides(): array
    {
        return [
            StockService::class,
            MobileUnitScheduleService::class,
            LandingService::class,
            CategoryService::class,
            ImageService::class,
            PostService::class,
            TagService::class,
            UnitService::class,
            UserProfileService::class,
            UserService::class,
            CategoryRepository::class,
            ImageRepository::class,
            PostRepository::class,
            TagRepository::class,
            UnitRepository::class,
            UserProfileRepository::class,
            UserRepository::class,
            AuthService::class,
        ];
    }
}
