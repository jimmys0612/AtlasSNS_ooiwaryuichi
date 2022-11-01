@extends('layouts.login')

@section('content')
<form action="/" method="POST">
    <textarea name="comment" rows="4" cols="80"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> 送信 </button>
</form>
@endsection