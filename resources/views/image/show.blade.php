@extends('layouts.app')
@section('content')
<style>
    .header {
        height: 12vh !important;
    }

    .hide-from-others {
        display: none;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <img src="/images/{{ $image->picture }}" class="img-thumbnail" alt="...">
        </div>
        <div class="col-md-4">
            <div style="font-size: 16px;">{{ $post->title }}</div>
            <div class="my-3">{{ $post->description }}</div>
            <div>
                <a style="text-decoration: none" href="/images/{{ $image->picture }}" download>
                    <button class="btn btn-primary d-flex align-items-center border-0" style="background: #02B368; border-radius: 20px; box-shadow: none">
                        <div style="margin-top: 4px; margin-right: 6px"><ion-icon name="arrow-down-circle-outline"></ion-icon></div>
                        <div>Download Image</div>
                    </button>
                  </a>
            </div>
            
        </div>
    </div>
</div>


@endsection