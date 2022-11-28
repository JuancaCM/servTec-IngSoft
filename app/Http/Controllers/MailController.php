<?php
namespace App\Http\Controllers;

use App\Mail\ResetearPassword;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class MailController extends Controller
{
    public function resetearPassword(Request $req)
    {
        $email = $req->mail;
        // \Log::info($email);
        $usuario = Usuario::where('correo', $email)->first();

        if ($usuario) {
            $randomString = Str::random(10);
            $newPassword = Hash::make($randomString);
            $usuario->password = $newPassword;
            $usuario->save();
            Mail::to($email)->send(new ResetearPassword($email, $randomString));
            return response()->json(null, 200);
        }

        return response()->json(null, 404);
    }
}
