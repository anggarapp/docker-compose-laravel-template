<?php

namespace App\Repositories\Impl;

use App\Models\Post;
use App\Repositories\PostRepository;

class PostRepositoryImpl implements PostRepository
{
    public function getPostById($postId)
    {
    }
    public function getAllPosts()
    {
    }
    public function deletePost($postId)
    {
    }
    public function createPost(array $newDetails)
    {
    }
    public function updatePost($postId, array $newDetails)
    {
    }
    public function findPostWithSort($sortColumn, $sortDirection = 'asc', $searchTerm = null)
    {
        return Post::with('unit', 'category')
            ->where(function ($query) use ($searchTerm) {
                if ($searchTerm) {
                    $query->where('title', 'like', '%' . $searchTerm . '%');
                    $query->orWhere('content', 'like', '%' . $searchTerm . '%');
                }
            })
            ->orderBy($sortColumn, $sortDirection);
    }
}
