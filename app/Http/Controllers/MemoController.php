<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Input;

use App\Memo;



class MemoController extends Controller{

  public function index(Request $request){

    $data = Memo::all();

    return view('memo.ichiran',['data'=>$data]);

  }

  //public function index2(Request $request){

  //  $data = Memo::all();

    //return view('memo.syousai',['data'=>$data]);

  //}

  public function index3(){

    return view('memo.shinki');

  }

  public function add(Request $request){

    return view ('memo.ichiran');

  }

  public function create(Request $request){

    $this->validate($request,Memo::$rules);

    $memo = new Memo;

    $data = $request->all();

    unset($data['_token']);

    $memo->fill($data)->save();

    $data = Memo::all();

    return view('memo.ichiran',['data'=>$data]);

  }

  public function edit(Request $request){

    $data = Memo::find($request->id);

    return view('memo.syousai',['data'=>$data]);

  }

  public function update(Request $request){

    $this->validate($request,Memo::$rules);

    $memo = Memo::find($request->id);

    $data = $request->all();

    unset($data['_token']);

    $memo->fill($data)->save();

    $data = Memo::all();

    return view('memo.ichiran',['data'=>$data]);

  }

  public function remove(Request $request){

    Memo::find($request->id)->delete();

    $data = Memo::all();

    return view('memo.ichiran',['data'=>$data]);

  }

}
