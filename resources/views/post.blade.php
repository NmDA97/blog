<!doctype html>
<title>My Blog</title>

<body>
    <link rel="stylesheet" href="/app.css">

    <article>
            <h1><?= $post-> title; ?></h1>

            <p>
              By <a href="#"> Jeffry way</a>  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>

            <div>
                {!! $post-> body !!}
            </div>
    </article>


    <a href="/">Go Back</a>
</body>
