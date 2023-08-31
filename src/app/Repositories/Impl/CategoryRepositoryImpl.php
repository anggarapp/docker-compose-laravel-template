<?php

namespace App\Repositories\Impl;

use App\Models\Category;
use App\Repositories\CategoryRepository;

class CategoryRepositoryImpl implements CategoryRepository
{
    public function getCategoryById($categoryId)
    {
    }
    public function getAllCategories()
    {
        return Category::all();
    }
    public function deleteCategory($categoryId)
    {
    }
    public function createCategory(array $newDetails)
    {
    }
    public function updateCategory($categoryId, array $newDetails)
    {
    }
    public function findCategoryWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
