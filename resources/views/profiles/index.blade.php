@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/instagram.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="{{ url('/p/create') }}">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{$user->profile->title}} </div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#"><strong>{{$user->profile->url }}</strong></a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)

        <div class="col-4 pb-5">
            <h1>{{$post->caption}}</h1>
            <a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a>
        </div>
        

        @endforeach
    </div>
</div>
@endsection
