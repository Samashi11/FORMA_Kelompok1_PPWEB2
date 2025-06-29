<x-app-layout>

    @include('layouts.navigation')

    <section
        class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply mb-4">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">{{ $forum->title}}</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{ $forum->content }}
            </p>
        </div>
    </section>

    <section class="py-24 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full flex-col justify-start items-start lg:gap-10 gap-6 inline-flex">
                <h2 class="text-gray-900 text-3xl font-bold font-manrope leading-normal">
                    {{ $totalComment}} Comments</h2>
                <div class="w-full flex-col justify-start items-start lg:gap-9 gap-6 flex">
                    <div class="w-full relative flex justify-between gap-2">
                        <x-form-comment :forumId="$forum->id">
                        </x-form-comment>
                    </div>
                    @foreach ($comments->comments as $comment)
                        <x-comment :name="$comment->user->name" :comment="$comment->comment_text" :tanggal="$comment->created_at">
                        </x-comment>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</x-app-layout>

