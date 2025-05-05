<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Scan extends Controller
{
    public function scan(Request $request)
{
    $token = $request->query('token');

    $menu = Menu::where('token', $token)->first();

    if (!$menu) {
        return response()->json([
            'success' => false,
            'message' => 'Token tidak ditemukan.'
        ], 404);
    }

    return redirect()->route('menu.show', [
        'id' => $menu->id,
        'token' => $token
    ]);
}
}
