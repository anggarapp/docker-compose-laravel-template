<?php

namespace App\Services\Impl;

use App\Repositories\CategoryRepository;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Http;

class CategoryServiceImpl implements CategoryService
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategories()
    {
        return $this->categoryRepository->getAllCategories();
    }

    public function getCategoryById($id)
    {
    }

    public function getCategoryBySlug($slug)
    {
    }

    public function deleteCategory($categoryId)
    {
    }
    public function updateCategory($categoryId, array $newDetails)
    {
    }
    public function createCategory(array $newDetails)
    {
    }
    public function findCategoryWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
