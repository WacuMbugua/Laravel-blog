@extends('layouts.app')


@section('content')
<div class="row">
@foreach($blogs as $blog)

    <div class="col-md-6">
    <div class="card">
    
    <div class="card-header">
    <a href="{{ route('blogs_path', ['blog' => $blog->id)}}">{{ $blog->title}}</a>
    </div>

    <div class="card-body">
    {{ $blog->content}}
    </div>
    </div>

    


@endforeach
    </div>
</div>





@endsection