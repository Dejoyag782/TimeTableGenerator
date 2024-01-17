<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

		<!-- Styles -->
		@include('partials.styles')
		@yield('styles')

		<title>@yield('title') | Timetable</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')

                @yield('content')
            </div>
        </div>

        @include('partials.confirm_dialog')

        <!-- Scripts -->
        @include('partials.scripts')
        @yield('scripts')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      
    </body>
</html>
