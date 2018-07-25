<?php
namespace App\Http\Controllers;
session_start();

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function loginPage(Request $request) {
        session_destroy();
        return view('login');
    }

    public function loginEndpoint(Request $request) {
        $user = User::where('username','=', $request->input('password'))->first();

        if (Hash::check($request->input('password'), $user['password'])) {
            $_SESSION['login_user'] =  $user['username'];
            return response()->json(['auth' => 'true']);
        } else {
            return response()->json(['auth' => 'false']);
        }
    }
    public function logout(Request $request) {
        session_destroy();
        return redirect('login');
    }

}