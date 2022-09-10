<x-layout>
    <section class="px-6 py-8">
        <x-panel>
            <h3>Manage Posts</h3>
            @foreach($posts as $post)
                <p>
                    {{$post->title}}
                    <a href="/admin/posts/{{$post->id}}/edit">Edit</a>
                </p>
            @endforeach
        </x-panel>
    </section>
</x-layout>
