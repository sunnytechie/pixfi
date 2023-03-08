@extends('layouts.app')

@section('content')
<style>
    .header {
        height: 30vh !important;
    }

    .hide-from-others {
        display: none;
    }

    input {
        border-radius: 0 !important;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="mt-5"></div>
            <div class="col-md-6 offset-md-3" style="min-height: 40vh">
                <form action="#" method="POST" class="dropzone shadow card p-3" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="pictures">Pictures</label>
                        <div class="dropzone" id="myDropzone"></div>
                    </div>
                 </form>
            </div>
        </div>
    </div>
@endsection