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
        $tabNumber = $this->tabNumbercorrection($request->get('tab_number'));
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

        $user->fullname = Worker::find($user->worker_id)->fullname;
        return response()->json(['message' => 'ok', 'username' => $user['username']], 201);
    }

    public function search() {
        $tabNumber = request('tab_number', 0);
        $tabNumber = $this->tabNumbercorrection($tabNumber);

        return Worker::where('tab_number', $tabNumber)->first();
    }


}
