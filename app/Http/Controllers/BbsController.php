<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
      $msg = 'hello-Bbs';
        return view('bbs.index',['msg' => $msg]);
    }
}
