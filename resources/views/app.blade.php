<!DOCTYPE html>
<html>
<head>
    <title>Soundeavor</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">

    <script src="{{ URL::asset('testing-site/js/dropzone.js') }}"></script>
		<!-- The main CSS file -->
		<link href="{{ URL::asset('testing-site/css/dropzone.css') }}" rel="stylesheet" />

</head>
<body>
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>

</body>
</html>
