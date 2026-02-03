<div>
    <h1>Blogs</h1>
    @if(session('success'))
    <span>{{session('success')}}</span>
    @endif
    <form action="form-data" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" placeholder="Title">
            @error('title')  {{$message}}  @enderror
        </div><br><br>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id=""></textarea>
            @error('content') {{$message}} @enderror
        </div><br>
        <button type='submit'>Submit</button>
    </form>
    <br><br>

<a href="/post-list">
    <button>view post</button>
</a>
</div>
