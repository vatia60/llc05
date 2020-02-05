@extends('layouts.master')
@section('content')
<h1 class="text-center">Index page</h1>
<div class="container text-center">

   @foreach( $links as $link => $url )
   <a href="{{$url}}">
   {{title}} {{}}
   </a>
   @endforeach
</div>
@endsection