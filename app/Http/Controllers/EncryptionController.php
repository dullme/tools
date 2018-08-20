<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptionController extends Controller
{

    public function md5(Request $request) {
        $text = $request->get('text');

        return response()->json([
            'md5' => md5($text),
            'bcrypt' => bcrypt($text)
        ]);
    }
}
