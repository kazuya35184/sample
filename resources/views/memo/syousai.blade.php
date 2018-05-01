@extends('layout.template')

@section('title','メモ詳細')

@section('menubar')
    <a href="{{action('MemoController@index')}}">メモ一覧</a><br><br>
@endsection

@section('content')
  <table cellspacing=10px;>
  <form action="edit" method="post">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$data->id}}">
      <tr>
        <td><input type="text" name="title" value="{{$data->title}}"></td>
      </tr>
      <tr>
        <td><textarea name="memo">{{$data->memo}}</textarea></td>
      </tr>
      <tr>
        <td><input type="submit" value="登録"></td>
  </form>
  <form action="delete" method="post">
  {{csrf_field()}}
        <td>
          <input type="hidden" name="id" value="{{$data->id}}">
          <input type="submit" value="削除">
        </td>
      </tr>
  </form>
  </table>

@endsection
