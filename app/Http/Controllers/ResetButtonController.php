<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetButtonController extends Controller
{
    public function restart(Request $request)
    {
        // This would usually trigger some reset logic — here it's just fake
        return response()->json(['message' => 'Progress restarted!']);
    }
}
