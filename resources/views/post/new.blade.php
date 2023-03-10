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
</style>
    <div class="container">
            <div class="mt-5"></div>
                {{-- <div id="myDropzone" class="dropzone"></div> --}}
                <p><h1>Multiple Upload - drag and drop</h1></p>
                <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                    @csrf
                    <input type="hidden" value="{{ $post }}" name="post_id">
                </form>  
    </div>
@endsection