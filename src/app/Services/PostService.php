<?php

namespace App\Services;

interface PostService
{
    public function getPosts();
    public function getPostById($id);
    public function getPostBySlug($slug);
    public function createPost(array $newDetails);
    public function deletePost($postId);
    public function updatePost($postId, array $newDetails);
    public function findPostWithSort($sortColumn, $sortDirection = 'asc', $searchTerm = null);
}
