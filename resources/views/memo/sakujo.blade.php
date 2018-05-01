@extends('layout.template')

@section('title','メモ削除')

@section('menubar')
    <a href="{{action('MemoController@index')}}">メモ一覧</a><br><br>
@endsection

@section('content')
  <form action="edit" method="post">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$data->id}}">
    <table cellspacing=10px;>
      <tr>
        <td><input type="text" name="title" value="{{$data->title}}"></td>
      </tr>
      <tr>
        <td><textarea name="memo">{{$data->memo}}</textarea></td>
      </tr>
      <tr>
        <td><input type="submit" value="登録"></td>
      </tr>
    <form>
    </table>
@endsection
