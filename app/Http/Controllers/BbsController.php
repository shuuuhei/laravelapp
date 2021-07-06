<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bbs;
use Validator;

class BbsController extends Controller
{
    public function index()
    {
      $bbs = Bbs::orderBy('id','desc')->get();
      return view('bbs.index',['bbses' => $bbs]);
    }

    public function add(Request $request)
    {
      $bbs = new Bbs;
      $bbs->user_id = 1;
      $bbs->title = $request->input('title');
      $bbs->body = $request->input('body');
      $bbs->save();

      return redirect()->to('/bbs');
    }

    public function delete (Request $request)
    {
      Bbs::find($request->id)->delete();
      return redirect('/bbs');
    }
}
