<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
     /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

         if (!empty($request->password) && !empty($request->password_confirmation)) 
         {
                $user = User::create($request->only('name','email','room'));
                $user->password = Hash::make($request->password);    
                $user->save();

                return response()->json([
                                          'status' => 1,
                                         'message' => 'user create successfully'
                ]);
        }else{

                return response()->json([
                                         'status' => 2,
                                         'message' => 'problems'
                ]);
        }
    }

    public function list()
    {
        $users = User::all();    

        if(isset($users))
        {
            return response()->json($users);

        }else{
            
            return response()->json([
                                        'status' => 400,
                                        'message' => 'problems, not users registred!'
            ]);
        }
    }
}
