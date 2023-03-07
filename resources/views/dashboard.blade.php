@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="grid">
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/600x600"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/600x400"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/800x400"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1200x1000"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1920x1080"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1000x2000"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1600x1400"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1000x1000"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1800x2000"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/2000x1500"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/3000x4000"></a></div>
                    <div class="grid-item"><a href="#"><img src="https://placehold.co/1350x1000"></a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" id="uploadModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Upload Media Files</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <form action="#" method="POST" class="dropzone" enctype="multipart/form-data">
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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary border-0" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary border-0" style="background: #14BC7D">Publish</button>
            </div>
          </div>
        </div>
    </div>

      <script>
        $(document).ready(function () {
            Dropzone.autoDiscover = false;
            var myDropzone = new Dropzone("#myDropzone", {
                url: "#",
                maxFiles: 10,
                acceptedFiles: "image/*",
            });
            });
      </script>
@endsection