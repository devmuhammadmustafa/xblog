@foreach($categories as $key=> $category)
    {{$category->title}} @if(count($post->categories) != $key+1). @endif
@endforeach
