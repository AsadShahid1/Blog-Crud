<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $content = $this->saveDom($request->description);
        $post = new Post;
        $post->title = $request->title;
        $post->description = $content;
        $post->featured_image = '';
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->save();
        $msg =session()->flash('message', 'Post successfully added.');

        return view('posts.index')->with($msg);

      }


    /**
     * @param string $description
     * @return string
     */
    private function saveDom(string $description): string{
        $content = $description;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');

        foreach($imageFile as $item => $image){
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "/upload/" . time().$image.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
         }

        $content = $dom->saveHTML();
         return $content;
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::with('user')->whereSlug($slug)->first();
        return view('posts.show')->with('post' , $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
     return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $content = $this->saveDom($request->description);
        $post->title = $request->title;
        $post->description = $content;
        $post->featured_image = '';
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->update();
        $msg =session()->flash('message', 'Post successfully udpated.');
        
        return view('posts.index')->with($msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $msg =session()->flash('message', 'Post successfully deleted.');
        return view('posts.index')->with($msg);

    }
}
