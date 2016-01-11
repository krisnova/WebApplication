@extends('app')
@section('content')

    @if (Session::has("message"))
       {{ Session::get("message") }}
     @endif
     <hr />

    <form action="add" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>
@endsection
