
@foreach($posts as $post)

<x-single-post :post="$post"></x-single-post>

@endforeach

{{$posts->links()}}
