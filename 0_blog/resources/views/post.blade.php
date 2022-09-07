<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <article>
        <h1>{{$post->title}}</h1>
        <div>{!!$post->body!!}</div>
    </article>

    <a href="/" style="margin-top: 10px"> Go Back </a>
</body>