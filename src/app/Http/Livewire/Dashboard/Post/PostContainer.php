<?php

namespace App\Http\Livewire\Dashboard\Post;

use App\Services\PostService;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;

class PostContainer extends Component
{
    use WithPagination;
    public $sortColumn = 'created_at';
    public $sortDirection = 'asc';
    public $searchTerm;

    protected $listeners = ['refreshPostParent' => '$refresh'];

    public function render()
    {
        return view('livewire.dashboard.post.post-container', [
            'posts' => $this->getPosts(),
            'headers' => $this->getTableHeader(),
        ]);
    }

    public function getPosts()
    {
        $postService = App::make(PostService::class);
        try {
            $posts = $postService->findPostWithSort($this->sortColumn, $this->sortDirection, $this->searchTerm)->paginate(7);
            // dd($posts[0]);
            return $posts;
        } catch (\Throwable $th) {
            return [];
        }
    }

    public function getTableHeader()
    {
        return [
            'title' => 'Title',
            'content' => [
                'label' => 'Content',
                'parse' => function ($value) {
                    return substr($value, 0, 40) . ' ...';
                }
            ],
            'created_at' => [
                'label' => 'Created',
                'parse' => function ($value) {
                    return $value->diffForHumans();
                }
            ],
        ];
    }
}
