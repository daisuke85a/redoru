@extends('layouts.redoru')

@section('title', 'Dress.index')

@section('menubar')
    @parent
    衣装・ページ
@endsection

@section('content')
    <table>
        <tr><th>Dress</th></tr>
        @foreach ($items as $item)
            <tr><td>{{$item->getData()}}</td></tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2018 daisuke.
@endsection

