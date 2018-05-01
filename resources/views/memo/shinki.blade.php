@extends('layout.template')

@section('title','メモ作成')

@section('menubar')
  <a href="{{action('MemoController@index')}}">メモ一覧</a>
@endsection

@section('content')
  <form action="add" method="post">
  {{csrf_field()}}
    <table cellspacing=10px;>
      <tr>
        <td><input type="text" name="title" size="50"></td>
      </tr>
      <tr>
        <td><textarea name="memo" cols="52" rows="20"></textarea></td>
      </tr>
    </table>
  <input type="submit" value="登録">
@endsection
  </form>
</div>
