<x-layout>
    <article>
        <h1>{{$post->title}}</h1>
        <div>{!!$post->body!!}</div>
    </article>

    <a href="/" style="margin-top: 10px"> Go Back </a>
</x-layout>