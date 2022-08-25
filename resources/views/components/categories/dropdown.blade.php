<select class="block mt-1 w-full" name="category_id" id="category_id">
    <option value="">Select Category</option>
    @foreach($categories as $category)
        <option @if($selectedId == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
