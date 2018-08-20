<?php

namespace App\Http\Controllers\Dev;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Auth;

class RootController extends AppBaseController
{
    public function login(Request $request){
        $credentials = [
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ];
        $admin = \Auth::attempt($credentials);
        return $this->successResponse($admin);
    }
    //
}
