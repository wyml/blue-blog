<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class File extends Controller
{
    //
    public function upload(Request $request)
    {
        $path = $request->file('file')->store('public');
        $url = Storage::url($path);
        return response()->json([
            'url' => $url
        ]);
    }
}
