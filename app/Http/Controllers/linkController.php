<?php

namespace App\Http\Controllers;

use App\Models\links;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class linkController extends Controller
{
    public function create(Request $request){
        $token = Str::random(10);
        $org_link = $request->original_link;
        $create = links::create([
            'original_link' => $org_link,
            'link_token' => $token
        ]);

        if($create){
            return response()->json([
                'data' => $token
            ]);
        }else{
            return response()->json([
                'error' => 'create_error'
            ], 500);
        }
    }

    public function get_link($get_link){
        $validate = links::where('link_token', $get_link)->first();
        if($validate){
            return redirect()->away($validate->original_link);
        }
    }
}
