

@include('partials.headystuff')

<body class ="testing">
<div class="align-center">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
          {!! Session::get('success') !!}
          </div>
        @endif
        <div class="secure">Upload Audio Files of Less Than 20MB</div>
        {!! Form::open(array('url'=>'apply/upload','method'=>'POST', 'class'=>'dropzone', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
         <!-- {!! Form::file('file') !!}-->
	  <p class="errors">{!!$errors->first('image')!!}</p>
	@if(Session::has('error'))
	<p class="errors">{!! Session::get('error') !!}</p>
	@endif
        </div>
        </div>
        <div id="success"> </div>
      <!--{!! Form::submit('Submit', array('class'=>'send-btn')) !!}-->
      {!! Form::close() !!}
      </div>
   </div>
</div>
   <!-- 
    <div class="filemanager">

		<div class="search">
			<input type="search" placeholder="Find a file.." />
		</div>

		<div class="breadcrumbs"></div>

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>

	</div>-->

</body>
