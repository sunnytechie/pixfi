@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                  <div class="grid">
                    @foreach ($images as $image)
                      <div class="grid-item"><a href="{{ route('image.show', $image->id) }}"><img src="/images/{{ $image->picture }}"></a></div>
                    @endforeach
                  </div>
                  <div class="d-flex justify-content-center my-5">
                    <div>
                      {{ $images->links('vendor.pagination.bootstrap-5') }}
                    </div>
                  </div>
            </div>
        </div>
    </div>


@endsection