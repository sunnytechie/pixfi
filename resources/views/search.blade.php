@extends('layouts.app')

@section('content')

<style>

</style>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="grid">
                  @foreach ($posts as $post)
                    @foreach ($post->pictures as $image)
                        <div class="grid-item"><a href="{{ route('image.show', $image->id) }}"><img src="/images/{{ $image->picture }}"></a></div>
                    @endforeach
                    
                  @endforeach
                </div>
                <div class="d-flex justify-content-center my-5">
                  <div>
                    {{ $posts->links('vendor.pagination.bootstrap-5') }}
                  </div>
                </div>
            </div>
        </div>
    </div>


@endsection