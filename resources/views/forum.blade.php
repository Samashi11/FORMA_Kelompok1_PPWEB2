<x-app-layout>
    @include('layouts.navigation')
    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 ">
            @foreach ($forums as $forum)
                <x-card-form :title="$forum->title" :content="$forum->content" :organisasi="$forum->organization->name" :warna="$forum->organization->color" :link="route('forum.detail', $forum->id)">
                </x-card-form>
            @endforeach
        </div>
    </div>
</x-app-layout>
