<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;

class PresenceController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
         if (!empty($request->room_id)) {

                $presence = Presence::create($request->only('room_id','moviment','current_date','user_id'));
                $presence->save();

                return response()->json([
                                          'status' => 1,
                                          'message' => 'presence create successfully'
                ]);
        }else{

                return response()->json([
                                         'status' => 2,
                                         'message' => 'is there any null parameter'
                ]);
        }
    }

    public function list()
    {
        $presences = Presence::where('current_date',date('Y-m-d'))
                           ->orderBy('room_id','ASC')
                           ->get();    

        if(isset($presences))
        {
            return response()->json($presences);
        }else{

            return response()->json([
                                        'status' => 400,
                                        'message' => 'not presences registred a day!'
            ]);   
        }
    }
}
