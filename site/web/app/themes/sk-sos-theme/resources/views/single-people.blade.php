@extends('layouts.app')

@section('content')
  <div class="mx-auto max-w-prose px-2 py-4 sm:py-8 lg:py-12">
    <div class="prose">
      @while (have_posts())
        @php(the_post())
       <h1> @include('partials.page-header')</h1>
        @includeFirst(['partials.content-page', 'partials.content'])
      @endwhile
    </div>
  </div>
@endsection

