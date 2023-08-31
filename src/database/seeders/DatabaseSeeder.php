<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Unit;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Role & Permission Init
        /// Permission
        $createPostPermission = Permission::create(['name' => 'create post']);
        $deletePostPermission = Permission::create(['name' => 'delete post']);
        $updatePostPermission = Permission::create(['name' => 'update post']);
        $createCategoryPermission = Permission::create(['name' => 'create category']);
        $deleteCategoryPermission = Permission::create(['name' => 'delete category']);
        $updateCategoryPermission = Permission::create(['name' => 'update category']);
        $createUnitPermission = Permission::create(['name' => 'create unit']);
        $deleteUnitPermission = Permission::create(['name' => 'delete unit']);
        $updateUnitPermission = Permission::create(['name' => 'update unit']);
        $createImagePermission = Permission::create(['name' => 'create image']);
        $deleteImagePermission = Permission::create(['name' => 'delete image']);
        $updateImagePermission = Permission::create(['name' => 'update image']);
        $createUserPermission = Permission::create(['name' => 'create user']);
        $deleteUserPermission = Permission::create(['name' => 'delete user']);
        $updateUserPermission = Permission::create(['name' => 'update user']);
        $createUserProfilePermission = Permission::create(['name' => 'create user profile']);
        $deleteUserProfilePermission = Permission::create(['name' => 'delete user profile']);
        $updateUserProfilePermission = Permission::create(['name' => 'update user profile']);

        /// Role
        $devRole = Role::create(['name' => 'dev']);
        $adminRole = Role::create(['name' => 'admin']);
        $writerRole = Role::create(['name' => 'writer']);

        /// Permision Assignation
        $devRole->syncPermissions([
            $createPostPermission,
            $deletePostPermission,
            $updatePostPermission,
            $createCategoryPermission,
            $deleteCategoryPermission,
            $updateCategoryPermission,
            $createUnitPermission,
            $deleteUnitPermission,
            $updateUnitPermission,
            $createImagePermission,
            $deleteImagePermission,
            $updateImagePermission,
            $createUserPermission,
            $deleteUserPermission,
            $updateUserPermission,
            $createUserProfilePermission,
            $deleteUserProfilePermission,
            $updateUserProfilePermission
        ]);

        $adminRole->syncPermissions([
            $createCategoryPermission,
            $deleteCategoryPermission,
            $updateCategoryPermission,
            $createUnitPermission,
            $deleteUnitPermission,
            $updateUnitPermission,
            $createImagePermission,
            $deleteImagePermission,
            $updateImagePermission,
        ]);

        $writerRole->syncPermissions([
            $createPostPermission,
            $deletePostPermission,
            $updatePostPermission,
        ]);


        $initUnit = Unit::factory(2)->create();
        $initUser = User::factory(4)->random()->create();
        $devUser = User::factory(1)->dev()->easyAcc()->for($initUnit[0])->create();
        $initCategory = Category::factory(3)->create();
        $initImage = Image::factory(5)->create();
        $initTag = Tag::factory(8)->create();
        $initPost = Post::factory(17)->random()->tagged()->create();

        foreach ($initUser as $user) {
            UserProfile::factory(1)->for($user)->create();
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
