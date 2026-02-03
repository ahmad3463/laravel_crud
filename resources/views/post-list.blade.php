<div>
    <h1>All blogs</h1> <a href="/">back to home</a>
@if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif     
    @foreach ($posts as $post)
    <h3><a href="{{route('post.single', $post->id)}}">
        {{$post->id}}: {{$post->title}}...
    </a></h3>
    <!-- <p>{{$post->content}}</p> -->
    @endforeach
</div>
