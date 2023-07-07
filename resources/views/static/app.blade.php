<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="copyright" content="{{ env('APP_AUTHOR', 'Davina Leong') }}">
    <meta name="description" content="{{ env('APP_DESCRIPTION', '') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS', '') }}">
    @yield('meta')

    <title>{{ env('APP_NAME', 'Bolierplate Auth Laravel') }}@yield('page-name')</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo.svg') }}" />
    @vite('resources/styles/app.scss')
    @yield('styles')

    <script
      src="https://kit.fontawesome.com/1b82ea5cb2.js"
      crossorigin="anonymous"
    ></script>
     @vite('resources/scripts/app.js')
  </head>
  <body class="@yield('body-class')">
    @yield('content')
    @yield('scripts')
  </body>
</html>
