@extends('layouts.redoru')

@section('title', 'Dress.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')

    <table>
        <form action="/dress/add" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <tr><th>衣装ID</th><td><input type="number" name="id"></td></tr>
        <tr><th>衣装所持者ID</th><td><input type="number" name="owner_id"></td></tr>
        <tr><th>画像ファイル名</th><td><input type="file" name="image"></td></tr>
        <tr><th>サイズ</th><td><input type="text" name="size"></td></tr>
        <tr><th>交換ステータス</th><td><input type="text" name="exchange_state"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2018 daisuke.
@endsection
