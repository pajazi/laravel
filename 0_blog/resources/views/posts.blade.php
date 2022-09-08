<x-layout>
    @foreach ($posts as $post)
    <article class="{{$loop->even ? 'foobar' : ''}}">
        <h1>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}<a>
        </h1>
        <div>
            {{ $post->excerpt }}
        </div>
    </article>
    @endforeach
</x-layout>
<!-- content="Hello world" directly in the x-layoyt tag -->
<!-- <x-slot name='content'> -->
<!-- </x-slot> -->