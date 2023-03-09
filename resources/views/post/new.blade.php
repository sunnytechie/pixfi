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
                <form class="row" action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" name="title" placeholder="Title (Optional)">
                        </div>
                        <div class="form-group my-3">
                            <textarea class="form-control" name="description" id="" cols="10" rows="6" placeholder="Descriptions, tags and others(Optional)" style="border-radius: 0"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6" style="min-height: 40vh">
                        
                        <div class="form-group">
                            <input type="file" name="images[]" class="dropify" data-height="150" data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png gif" multiple />
                        </div>

                        <div class="form-group my-3">
                            <button class="btn btn-success w-50" type="submit" style="border-radius: 0">Upload</button>
                        </div>
                    </div>
                </form>
    </div>
@endsection