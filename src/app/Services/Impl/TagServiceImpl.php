<?php

namespace App\Services\Impl;

use App\Repositories\TagRepository;
use App\Services\TagService;
use Illuminate\Support\Facades\Http;

class TagServiceImpl implements TagService
{
    private TagRepository $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    public function getTags()
    {
    }

    public function getTagById($id)
    {
    }

    public function getTagBySlug($slug)
    {
    }

    public function deleteTag($tagId)
    {
    }
    public function updateTag($tagId, array $newDetails)
    {
    }
    public function createTag(array $newDetails)
    {
    }
    public function findTagWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
