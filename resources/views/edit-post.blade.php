<div>
   <form action="{{route('post.update', $post->id)}}" method="Post">
    @csrf
    @method('PUT')

    <input type="text" name= "title" value="{{old('title', $post->title)}}">
    @error('title') <span>{{$message}}</span>  @enderror

    <br><br>

    <textarea name="content" id="">{{old('content', $post->content)}}</textarea>
     @error('content') <span>{{$message}}</span>  @enderror

     <br><br>

     <button type="submit"> update</button>
   </form>
</div>
