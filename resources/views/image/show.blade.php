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
            <img src="/storage/{{ $image->picture }}" class="img-thumbnail" alt="...">
        </div>
        <div class="col-md-4">
            <div style="font-size: 16px;">{{ $post->title }}</div>
            <div class="my-3">{{ $post->description }}</div>
            <div class="d-flex">
                <form action="{{ route('destroy.picture', $image->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this Image?')" class="btn btn-danger me-4" style="border-radius: 20px; box-shadow: none"><ion-icon name="trash-outline"></ion-icon> Trash</button>
                </form>

                <a style="text-decoration: none" href="/storage/{{ $image->picture }}" download>
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