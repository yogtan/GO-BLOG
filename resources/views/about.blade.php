@extends('layouts.main')

@section('container')
<h1>Perkenalkan</h1>
<h2>{{ $nama }} </h2>
<h2>{{ $email }} </h2>
<img src="img/{{ $image }} " alt="" width="200px" height="200px" class="img-thumbhnail rounded-circle">
@endsection 