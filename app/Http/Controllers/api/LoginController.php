<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'username'      => $request->username,
            'password'      => Hash::make($request->password),
            'total_skor'    => 0,
            'jumlah_salah'  => 0,
            'save_file'     => false,
        ]);

        return response()->json(['status_code' => 200]);
    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status_code'   => 400,
                'name'          => '',
                'access_token'  => '',
            ]);
        } else {
            $user = User::where('username', $request->username)->first();

            if ($user == null) {
                return response()->json([
                    'status_code'   => 400,
                    'name'          => '',
                    'access_token'  => '',
                ]);
            }

            if (!Hash::check($request->password, $user->password, [])) {
                return response()->json([
                    'status_code'   => 400,
                    'name'          => '',
                    'access_token'  => '',
                ]);
            }

            $tokenResult = $user->createToken();
            return response()->json([
                'status_code'   => 200,
                'name'          => $tokenResult->accessToken->name,
                'access_token'  => 'Bearer ' . $tokenResult->plainTextToken,
            ]);
        }
    }

    public function logout()
    {
        $user = request()->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        return response()->json(['status_code' => 200]);
    }
}
