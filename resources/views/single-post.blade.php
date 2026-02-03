<div>
                                                                        
   <h2>{{$post->title}}</h2>
   <p>{{$post->content}}</p>
</div><br><br>
<a href="{{route('post.edit', $post->id)}}">
edit post
</a>

<form action="{{route('post.destroy', $post->id)}}" method="POST" onsubmit="return confirm('are you sure you want to delete this post')">
    @csrf
    @method('DELETE')
    <button type="submit">DELETE POST</button>
</form>

