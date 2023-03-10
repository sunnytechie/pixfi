@extends('layouts.app')

@section('content')
<style>
    .header {
        height: 15vh !important;
    }

    .hide-from-others {
        display: none;
    }

    input {
        border-radius: 0 !important;
    }

    .dropzone {
        border-radius: 20px;
        border: 0.2rem solid #5E60E4;
    }
</style>
    <div class="container">
            <div class="mt-5"></div>
                {{-- <div id="myDropzone" class="dropzone"></div> --}}
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 style="font-size: 20px">{{ $post->title }}</h1>
                        <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            @csrf
                            <input type="hidden" value="{{ $post->id }}" name="post_id">
                        </form> 
                    </div>
                </div> 
    </div>
@endsection