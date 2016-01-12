@extends('app')
@section('content')

    @if (Session::has("message"))
       {{ Session::get("message") }}
     @endif
     <hr />

     <form action="add" class="dropzone">
   <div class="fallback">
     <input name="file" type="file" multiple />
   </div>
 		</form>
@endsection
