<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $item = [
            'txt' => 'テキスト',
            'message' => $request->param
        ];
        return view(
            'index',
            $item
        );
    }
}