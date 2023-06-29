@dd($post)
@extends('layouts.main')

@section('container')
<article class="mb-5">
    
    <h5> By : {{ $post["author"] }}</h5>

</article>
<a href="/posts">Back to Blog</a>
@endsection