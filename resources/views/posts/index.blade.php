@extends('layouts.app')

@section('content')
<div class="container">
 @foreach ($posts as $post)
 <div  style="margin-top:15px;margin-left:350px">
    <div style="display:flex;margin-top:30px;margin-right: 60px">
      <div>
        <div style="display: flex;align-items:center;">
          <div style="padding-right: 5px">
            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-width:35px">
            </div>
            <div>
        <div style="font-weight: bold">
            <a href="/profile/{{ $post->user->id }}" style="text-decoration: none;color:black">{{ $post->user->username }}</a>
          </div>
        </div>        
      </div>
        <p><a href="/profile/{{ $post->user->id }}" style="text-decoration: none;color:black"></a>  {{ $post->caption }}</p>
      </div>
    </div>
    <div style="width:60%">
      <img src="/storage/{{ $post->image }}" alt="" style="width: 80%">
    </div>
    
  </div>
 @endforeach
 <div class="row mt-5">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
 </div>
</div>
@endsection
