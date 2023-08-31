<?php

namespace App\Http\Livewire\Dashboard\Post;

use App\Http\Livewire\Component\Modal;
use App\Services\CategoryService;
use Illuminate\Support\Facades\App;

class PostCreateModal extends Modal
{
    public function render()
    {
        return view('livewire.dashboard.post.post-create-modal', [
            'categories' => $this->getCategories(),
        ]);
    }

    public function getCategories()
    {
        $categoryService = App::make(CategoryService::class);
        try {
            $categories = $categoryService->getCategories();
            // dd($categories[0]);
            return $categories;
        } catch (\Throwable $th) {
            return [];
        }
    }

    public function clearVariable()
    {
        $this->unShow();
    }
}
