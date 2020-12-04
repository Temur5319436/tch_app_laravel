<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\NewAccessToken;

class UserController extends Controller
{
    public function user() {
        return Worker::find(Auth::user()->worker_id);
    }

    public function register(Request $request) {
        $request->validate([
            'tab_number' => 'required',
            'passport' => 'required',
        ]);
        $tabNumber = $request->get('tab_number');
        $passport = $request->get('passport');
        
        $worker = Worker::where('tab_number', $tabNumber)->where('passport', $passport)->first();

        if (!$worker) {
            return response()->json(['message' => 'Табл рақами ёки паспорт нотўғри!'], 401);
        }
        $username = User::max('id') + 1;
        $user = User::create([
            'username' => "tch-$tabNumber-$username",
            'password' => bcrypt("tch-$tabNumber-$username"),
            'worker_id' => $worker->id
        ]);
        return response()->json(['message' => 'ok', 'username' => $user['username']], 201);
    }

    public function search() {
        $tabNumber = request('tab_number', 0);
        
        if ($tabNumber <= 9) $tabNumber = '000' . $tabNumber;
        elseif ($tabNumber <= 99) $tabNumber = '00' . $tabNumber;
        elseif ($tabNumber <= 999) $tabNumber = '0' . $tabNumber;

        return Worker::where('tab_number', $tabNumber)->first();
    }
}
