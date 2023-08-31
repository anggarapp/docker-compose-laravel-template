<?php

namespace App\Services;

interface CategoryService
{
    public function getCategories();
    public function getCategoryById($id);
    public function getCategoryBySlug($slug);
    public function deleteCategory($categoryId);
    public function updateCategory($categoryId, array $newDetails);
    public function createCategory(array $newDetails);
    public function findCategoryWithSort($sortColumn, $sortDirection, $searchTerm = null);
}
