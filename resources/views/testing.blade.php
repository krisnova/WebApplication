<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Mini Ajax File Upload Form</title>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
		<!-- DropZone JS inclusion -->
		<script src="{{ URL::asset('testing-site/js/dropzone.js') }}"></script>
		<!-- The main CSS file -->
		<link href="{{ URL::asset('testing-site/css/dropzone.css') }}" rel="stylesheet" />
	</head>

	<body>

		<form action="/file-upload" class="dropzone">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
		</form>

		<footer>
        </footer>

	</body>
</html>
