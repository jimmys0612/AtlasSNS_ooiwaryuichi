@extends('layouts.login')

@section('content')

<form action="search.php" method="post">
   <!-- 任意の<input>要素＝入力欄などを用意する -->
   <input type="text" name="input1">
   <!-- 送信ボタンを用意する -->
   <input type="submit" name="submit" value="送信">
</form>

@endsection