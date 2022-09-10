@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf

            <header class="flex">
                <img class="rounded-xl mr-5" style="width:40px;" src="https://i.pravatar.cc/60"
                     alt=""/>
                <h2>Want to participate?</h2>
            </header>

            <div class="mt-5">
                                    <textarea class="w-full text-sm" required name="body" cols="30" rows="10"
                                              placeholder="Quick, think of something to say"></textarea>

                @error('body')
                <span class="text-xs text-red">{{$message}}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="bg-blue-500 text-white uppercase text-xs py-2 px-10 rounded-xl mt-1">
                    Post
                </button>
            </div>
        </form>
    </x-panel>
@else
    <a href="/login" class="text-blue-500">Log In to leave a comment</a>
@endauth
