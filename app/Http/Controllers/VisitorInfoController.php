<?php

namespace App\Http\Controllers;

use App\VisitorInfo;
use Illuminate\Http\Request;

class VisitorInfoController extends Controller
{
    public function store_visitor_info (Request $request)
    {
//        dd($request->all());
        $is_submit = VisitorInfo::create($request->all());
        if ($is_submit){
            return response()->json(['message' => 'Vola! Visitor info submitted successfully.', 'status' => 'success']);
        }else{
            return response()->json(['message' => 'Oops! Something went wrong.', 'status' => 'fail']);
        }
    }
}
