<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Language" content="{{ app()->getLocale() }}" />
    <meta name="msapplication-TileColor" content="#146eff">
    <meta name="theme-color" content="#146eff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title')</title>
    <meta name="description" content="@yield('page_description')">

    <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{ $favicon_16 }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ $favicon_32 }}" sizes="32x32" />

    <link rel="stylesheet" href="{{ url('assets/css/app.css?' . config('system.client_side_timestamp')) }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>var APP_URL = '{{ config('app.url') }}';var csrf_token = '{{ csrf_token() }}';</script>
    <script src="{{ url('assets/javascript?locale=' . app()->getLocale() . '&' . config('system.client_side_timestamp')) }}"></script>
    <script src="{{ url('assets/js/app.js?' . config('system.client_side_timestamp')) }}"></script>

@yield('page_head')

  <body @yield('body_attr')>

    <div class="page">
      <div class="page-main">

@include('../layouts.components.header-front')

@yield('content')

      </div>
    </div>

@yield('page_bottom')

</body>
</html>