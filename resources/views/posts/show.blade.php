@extends('layouts.app')

@section('content')
<div class="container">
  <div  style="display:flex">
    <div style="width:60%">
      <img src="/storage/{{ $post->image }}" alt="" style="width: 80%">
    </div>
    <div style="width:40%;margin-top:30px;margin-right: 60px">
      <div>
        <div style="display: flex;align-items:center;">
          <div style="padding-right: 5px">
          <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-width:35px">
        </div>
        <div>
          <div style="font-weight: bold">
            <a href="/profile/{{ $post->user->id }}" style="text-decoration: none;color:black">{{ $post->user->username }}</a>
            <a href="" style="text-decoration: none;margin-left:20px">Follow </a>
            
          </div>
        </div>
        
      </div>
      <hr>
        <p><a href="/profile/{{ $post->user->id }}" style="text-decoration: none;color:black"><span style="font-weight: bold">{{ $post->user->username }}</span></a>  {{ $post->caption }}</p>
        
      </div>
    </div>
  </div>
</div>
@endsection
