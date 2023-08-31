<?php

namespace App\Services\Impl;

use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Support\Facades\Http;

class PostServiceImpl implements PostService
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getPosts()
    {
    }

    public function getPostById($id)
    {
    }

    public function getPostBySlug($slug)
    {
    }

    public function createPost(array $newDetails)
    {
    }
    public function deletePost($postId)
    {
    }
    public function updatePost($postId, array $newDetails)
    {
    }

    public function findPostWithSort($sortColumn, $sortDirection = 'asc', $searchTerm = null)
    {
        return $this->postRepository->findPostWithSort($sortColumn, $sortDirection, $searchTerm);
    }
}
