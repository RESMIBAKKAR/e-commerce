<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testapicontroller extends Controller
{
    public function test()
    {
        return response()->json([
            'is_done' => 'API is working!'
        ]);
    }
}
