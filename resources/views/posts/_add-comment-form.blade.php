@auth

    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">

                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full">

                <h2 class="ml-3"> Want to participate?</h2>

            </header>

            <div class="mt-6">

                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick, thing of something to say!" required></textarea>


            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">

                <x-submit-button>Post</x-submit-button>

            </div>


        </form>
    </x-panel>
@else
    <p class="text-gray-600">
        <a href="/register" class="hover:underline font-semibold">Register </a> or <a href="/login"
            class="hover:underline font-semibold"> Log in </a> to leave a comment.
    </p>

@endauth
