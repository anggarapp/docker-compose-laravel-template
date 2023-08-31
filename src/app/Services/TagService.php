<?php

namespace App\Services;

interface TagService
{
    public function getTags();
    public function getTagById($id);
    public function getTagBySlug($slug);
    public function deleteTag($tagId);
    public function updateTag($tagId, array $newDetails);
    public function createTag(array $newDetails);
    public function findTagWithSort($sortColumn, $sortDirection, $searchTerm = null);
}
