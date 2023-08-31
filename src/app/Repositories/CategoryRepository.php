<?php

namespace App\Repositories;

interface CategoryRepository
{
    public function getAllCategories();
    public function getCategoryById($categoryId);
    public function deleteCategory($categoryId);
    public function updateCategory($categoryId, array $newDetails);
    public function createCategory(array $newDetails);
    public function findCategoryWithSort($sortColumn, $sortDirection, $searchTerm = null);
}
