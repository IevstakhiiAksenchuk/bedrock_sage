<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())
</head>

<body @php(body_class())>
  @php(wp_body_open())

  <div id="app">
    <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content') }}
    </a>

    @include('sections.header') {{-- Include the header section --}}

    <main id="main" class="main max-w-screen-xl mx-auto pr-2 pl-2 pt-4 pb-4">
      @yield('content') {{-- Main content placeholder --}}
    </main>

    <!-- Clear Floated Elements -->
    <div class="clearfix"></div>

    <!--@hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif-->

    @include('sections.footer') {{-- Include the footer section --}}
  </div>

  @php(do_action('get_footer'))
  @php(wp_footer())
</body>

</html>