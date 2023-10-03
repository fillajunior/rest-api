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
        return response()->json(User::select([
            'username',
            'password',
            'total_skor',
            'lama_waktu_bermain',
            'bermain_sampai_akhir',
            'jumlah_gagal_keseluruhan_evaluasi',
            'jumlah_gagal_badge',
            'bermain_sampai_akhir'])->where('id', Auth::user()->id)->first());
    }

    public function update(Request $request)
    {
        User::where('id', Auth::user()->id)->update([
            'total_skor'                        => $request->total_skor == null || $request->total_skor ==  '' ? Auth::user()->total_skor : $request->total_skor,
            'lama_waktu_bermain'                => $request->lama_waktu_bermain == null || $request->lama_waktu_bermain ==  '' ? Auth::user()->lama_waktu_bermain : $request->lama_waktu_bermain,
            'bermain_sampai_akhir'              => $request->bermain_sampai_akhir == null || $request->bermain_sampai_akhir ==  '' ? Auth::user()->bermain_sampai_akhir : $request->bermain_sampai_akhir,
            'jumlah_gagal_keseluruhan_evaluasi' => $request->jumlah_gagal_keseluruhan_evaluasi == null || $request->jumlah_gagal_keseluruhan_evaluasi ==  '' ? Auth::user()->jumlah_gagal_keseluruhan_evaluasi : $request->jumlah_gagal_keseluruhan_evaluasi,
            'jumlah_gagal_badge'                => $request->jumlah_gagal_badge == null || $request->jumlah_gagal_badge ==  '' ? Auth::user()->jumlah_gagal_badge : $request->jumlah_gagal_badge,
            'bermain_sampai_akhir'              => $request->bermain_sampai_akhir == null || $request->bermain_sampai_akhir ==  '' ? Auth::user()->bermain_sampai_akhir : $request->bermain_sampai_akhir,
        ]);

        return response()->json(['status_code' => 200]);
    }
}
