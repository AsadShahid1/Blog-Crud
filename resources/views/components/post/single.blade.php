<div class="container bg-orange-200	md:mx-auto md:container md:mx-auto p-5">
    <div class="grid justify-items-center ...">
        <h1 class="font-bold text-2xl"><u>POST #{{$post->id}}</u></h1>
      </div>
    <h1>
        <a href="{{route('posts.show', $post->slug)}}">
          <b> Title : </b> {{$post->title}}
        </a>
    </h1>
    <h1><b>Written By : </b> {{$post->user->name }}</h1>
    <p><h1><b>Description : </b></h1>{!!$post->description!!}</p>
    <small>{{$post->created_at->diffForHumans()}}</small>
    <br>
    <hr>
    <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
        <a href="{{route('posts.show', $post->slug) }}">
            View Post
        </a>
    </button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
        <a href="{{route('posts.edit', $post->id ) }}">
            Edit Post 
        </a>
    </button>
    <br><br>
    <form action="{{route('posts.destroy', $post->id ) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-blue-700 rounded ">
                Delete Post 
        </button>
    </form>
    <br><br>
    
</div>
