<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

<main id="main" class="max-w-9xl mx-auto bg-slate-50 dark:bg-slate-900">
  @yield('content')
</main>

@include('sections.footer')
