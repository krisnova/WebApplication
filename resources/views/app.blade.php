<!DOCTYPE html>
<html>
<head>
    <title>Soundeavor</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">

</head>
<body>
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ URL::asset('/js/test.js') }}"></script>
</body>
</html>