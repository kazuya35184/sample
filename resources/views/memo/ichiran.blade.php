<!--別ファイルに作ってあるレイアウトに、組み込む内容を記述するファイル-->
<!--この種類のファイルの数だけページが存在することになる-->
<!--コンポーネントは他と切り分けてコンテンツを挿入できる-->
<!--コンポーネントを使う際は、別ファイルを用意する必要がある-->
@extends('layout.template')

@section('title','メモ一覧')

@section('menubar')
  <a href={{action('MemoController@index3')}}>新規作成</a>
@endsection

@section('content')
  @foreach($data as $item)

  <table cellspacing=10px;>
    <tr>
      <td>{{$item->title}}</td><td><a href="{{action('MemoController@edit',['id'=>$item->id])}}">詳細</td>
    </tr>
  </table>

  @endforeach
@endsection
