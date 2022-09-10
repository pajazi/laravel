@props(['comment'])
<article
    class="flex mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded-xl" style="width:60px;" src="https://i.pravatar.cc/60" alt=""/>
    </div>

    <div>
        <hedaer>
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Posted
                <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
            </p>
        </hedaer>

        <p class="mt-2">
            {{$comment->body}}
        </p>
    </div>
</article>
