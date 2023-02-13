@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" alt="image"class="rounded-circle w-100" style="margin-left:35px;margin-top:15px" >
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex" style="justify-content: space-between;align-items:center;margin-right:90px">
            <div class="d-flex align-items-center pb-3" >
            <h1>{{$user->username }}</h1>
            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
        </div>
            @can('update', $user->profile)
                <a href="/p/create" style="text-decoration: none">Add New Post</a>
            @endcan
        </div>
        @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit" style="text-decoration: none">Edit Profile</a>
        @endcan
        <div class="d-flex">
            <div style="margin-right: 35px"><strong>{{ $user->posts->count() }}</strong>Posts</div>
            <div style="margin-right: 35px"><strong>{{ $user->profile->followers->count() }}</strong>Followers</div>
            <div style="margin-right: 35px"><strong>{{ $user->following->count() }}</strong>Following</div>
        </div>
        <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
        <div>{{ $user->profile->description}}</div>
        <div><a href="google.com">{{$user->profile->url}}</a></div>
    </div>
   </div>
   <div class="row pt-5">
    @foreach ($user->posts as $post)
        <div class="col-4 mb-3">
        <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" style="width: 330px" alt=""></a>
    </div>
    
    @endforeach
    
   </div>
</div>
@endsection
