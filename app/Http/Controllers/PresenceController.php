<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Presence;
use App\Models\Rooms;

class PresenceController extends Controller
{
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
        $rooms = Rooms::all();    

        return response()->json($rooms);
    }
}
