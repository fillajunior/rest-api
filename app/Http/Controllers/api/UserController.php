<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function detail()
    {
        return response()->json(User::select(['username', 'password', 'total_skor', 'jumlah_salah', 'save_file'])->where('id', Auth::user()->id)->first());
    }

    public function update(Request $request)
    {
        User::where('id', Auth::user()->id)->update([
            'total_skor'    => $request->total_skor == null || $request->total_skor ==  '' ? Auth::user()->total_skor : $request->total_skor,
            'jumlah_salah'  => $request->jumlah_salah == null || $request->jumlah_salah ==  '' ? Auth::user()->jumlah_salah : $request->jumlah_salah,
            'save_file'     => $request->save_file == null || $request->save_file ==  '' ? Auth::user()->save_file : $request->save_file,
        ]);

        return response()->json(['status_code' => 200]);
    }
}
