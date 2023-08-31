<div>
    <div x-data="{}" class="bg-white rounded-lg px-8 py-6 overflow-x-scroll custom-scrollbar">
        <h4 class="text-xl font-semibold">Your Post List</h4>
        <div class="mt-8 mb-3 flex flex-col md:flex-row items-start md:items-center md:justify-between">
            <div class="flex items-center justify-center space-x-4">
                <form class="relative flex items-center">
                    <input type="search" name="input_search_without_btn" id="input_search_without_btn"
                        class="flex-1 py-0.5 pl-10 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                        placeholder="Search...">
                    <span class="absolute left-2 bg-transparent flex items-center justify-center" @click="show = !show">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                </form>
            </div>
            <button type="button" data-te-ripple-init data-te-ripple-color="light" x-data="{}"
                x-on:click="window.livewire.emitTo('dashboard.post.post-create-modal', 'show')"
                class="flex items-center spa rounded bg-blue-500 px-4 pb-2 pt-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />

                </svg>
                <span class="px-4">
                    Add Post
                </span>
            </button>
        </div>

        <table class="w-full whitespace-nowrap mb-8">
            <thead class="bg-secondary text-gray-100 font-bold">
                <td class="py-2 pl-2">
                    #
                </td>
                @foreach ($headers as $header => $value)
                <td scope="col" class="py-2 pl-2" wire:click="sort('{{$header}}')">
                    @if ($sortColumn == $header)
                    <span>{!!$sortDirection == 'asc' ? '&#8659;':'&#8657;'!!}</span>
                    @endif
                    {{is_array($value) ? $value['label']: $value}}
                </td>
                @endforeach
                <td class="py-2 pl-2">
                    Unit
                </td>
                <td class="py-2 pl-2">
                    Category
                </td>
                <td class="py-2 pl-2">
                    Tag
                </td>
                <td class="py-2 pl-2">
                    Action
                </td>
            </thead>
            <tbody class="text-sm">
                @if (count($posts))
                @foreach ($posts as $post)
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="py-3 pl-2">{{ $posts->perPage() * ($posts->currentPage() - 1) + $loop->iteration }}
                    </td>
                    @foreach ($headers as $key => $value)
                    <td class="py-3 pl-2">
                        {!! is_array($value) ? $value['parse']($post->$key): $post->$key !!}
                    </td>
                    @endforeach
                    <td class="py-3 pl-2">
                        {{ $post->unit->name }}
                    </td>
                    <td class="py-3 pl-2">
                        {{ $post->category->name}}
                    </td>
                    <td class="py-3 pl-2">
                        @foreach ($post->tags as $tag)
                        <span
                            class="inline-block whitespace-nowrap rounded-full bg-blue-600 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-white">
                            {{ $tag->name }}
                        </span>
                        @endforeach
                    </td>
                    <td class="py-3 pl-2 flex items-center space-x-3">
                        <a href="#view" x-data="{}"
                            x-on:click="window.livewire.emitTo('dashboard.post.post-view', 'detailView', '{{ $post->id }}')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary hover:text-primary-dark"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                        <a href="#edit" x-data="{}"
                            x-on:click="window.livewire.emitTo('dashboard.post.post-update-modal', 'showUpdate', '{{ $post->id }}')">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 text-yellow-500 hover:text-yellow-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                        <a href="#delete" x-data="{}"
                            x-on:click="window.livewire.emitTo('dashboard.post.post-delete-modal', 'showdelete','{{ $post->id }}')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 hover:text-red-600"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="{{count($headers)}}">No Data Found</td>
                </tr>
                @endif
                <tr class="bg-gray-100 hover:bg-primary hover:bg-opacity-20 transition duration-200">
                </tr>
            </tbody>
        </table>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 px-10 mt-2">
            {{ $posts->links() }}
        </div>
    </div>
    <livewire:dashboard.post.post-create-modal>
</div>