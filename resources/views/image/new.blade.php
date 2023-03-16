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

    .dropify-wrapper {
        border: 2px dashed #ccc;
        border-radius: 10px;
        padding: 20px;
        background-color: #f9f9f9;
        }

</style>
    <div class="container">
            <div class="mt-5"></div>
                {{-- <div id="myDropzone" class="dropzone"></div> --}}
                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        
                        <h1 style="font-size: 20px">{{ $post->title }}</h1>
                        <form class="shadow p-4" method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" value="{{ $post->id }}" name="post_id">

                                <div class="mb-3">
                                  <label for="file" class="form-label">Image</label>
                                  <input type="file" class="dropify form-control" id="file" name="file" aria-describedby="fileHelp">
                                  
                                  <div id="fileHelp" class="form-text">
                                  @error('file')
                                    <strong class="text-danger">{{ $message }}</strong>
                                      @else
                                      Upload file.
                                  @enderror
                                  </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success rounded-0 w-50">Submit</button>
                                </div>
                          
                        </form> 

                        <div class="grid mt-5">
                            @foreach ($posts as $post)
                              @foreach ($post->pictures as $image)
                                  <div class="grid-item"><a href="{{ route('image.show', $image->id) }}"><img src="/storage/{{ $image->picture }}"></a></div>
                              @endforeach
                            @endforeach
                        </div>
                    </div>
                </div> 
    </div>

    
@endsection