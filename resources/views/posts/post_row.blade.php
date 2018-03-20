<div class="row">
    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta"><a href="#">{{$post->user->name}}</a> On {{$post->created_at->toFormattedDateString()}}</p>
            <p>{{$post->body}}</p>
        </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->
</div><!-- /.row -->
