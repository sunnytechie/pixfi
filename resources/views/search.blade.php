@extends('layouts.app')

@section('content')

<style>
 .header {
        height: 35vh !important;
    }

    .remove-spacer {
      height: 15vh !important;
    }
</style>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
              @if ($posts->count() == 0)
              <div class="row">
                <div class="mt-5 text-center col-md-8 offset-md-2" style="font-size: 30px">
                  No Picture was found for this search, <br> Kindly check back later. <br> thank you.
                </div>
              </div>
              @else
                <div class="grid">
                    @foreach ($posts as $post)
                      @foreach ($post->pictures as $image)
                          <div class="grid-item"><a href="{{ route('image.show', $image->id) }}"><img src="/images/{{ $image->picture }}"></a></div>
                      @endforeach
                    @endforeach
                </div>
                @endif
                <div class="d-flex justify-content-center my-5">
                  <div>
                    {{ $posts->links('vendor.pagination.bootstrap-5') }}
                  </div>
                </div>
            </div>
        </div>
    </div>


@endsection