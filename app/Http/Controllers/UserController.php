<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormUserRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function store(FormUserRequest $request)
    {

         if (!empty($request->password) && !empty($request->password_confirmation)) {

                $user = User::create($request->only('name','email','room'));
                $user->password = Hash::make($request->password);    
                $user->save();

                return response()->json([
                                          'status' => 1,
                                         'message' => 'user create successfully'
                ])
        }else{

                return response()->json([
                                         'status' => 2,
                                         'message' => 'problems'
                ])
        }
    }

    

}
